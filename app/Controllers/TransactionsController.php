<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Category;
use App\Models\Transaction;
use App\Models\UserModel;
use CodeIgniter\HTTP\ResponseInterface;
use Dompdf\Dompdf;
use Dompdf\Options;

class TransactionsController extends BaseController
{
    protected $session;
    protected $categoryModel;
    protected $transactionModel;
    protected $userModel;


    public function __construct()
    {
        $this->session = \Config\Services::session();
        $this->categoryModel = new Category();
        $this->transactionModel = new Transaction();
        $this->userModel = new UserModel();
    }

    public function index()
    {
        $userId = $this->session->get('user_id');

        // Fetch categories associated with the user
        $categories = $this->categoryModel->getCategoriesByUser($userId);
        $transactions = $this->transactionModel->getTransactionsWithCategory($userId);

        return view('pages/expenses', ['categories' => $categories, 'transactions' => $transactions]);
    }

    public function addTransaction()
    {
        $userId = $this->session->get('user_id');

        // Retrieve form data
        $type = $this->request->getPost('type');
        $categoryId = $this->request->getPost('category');
        $description = $this->request->getPost('description');
        $amount = $this->request->getPost('amount');
        $currency = $this->userModel->getUser($userId)['currency'];

        $this->transactionModel->save([
            'type' => $type,
            'category_id' => $categoryId,
            'description' => $description,
            'amount' => $amount,
            'currency' => $currency,
            'user_id' => $userId
        ]);

        return redirect()->back()->with('message', 'Transaction added successfully!');
    }

    public function updateTransaction($id)
    {
        $data = [
            'category_id' => $this->request->getPost('category_id'),
            'type' => $this->request->getPost('type'),
            'description' => $this->request->getPost('description'),
            'amount' => $this->request->getPost('amount'),
        ];

        if ($this->transactionModel->update($id, $data)) {
            return redirect()->to('/expenses')->with('message', 'Transaction updated successfully!');
        }

        return redirect()->back()->with('error', 'Failed to update transaction.');
    }

    public function deleteTransaction($transactionId)
    {
        $userId = $this->session->get('user_id');

        $transaction = $this->transactionModel->where('id', $transactionId)
            ->where('user_id', $userId)
            ->first();

        if ($transaction) {
            $this->transactionModel->delete($transactionId);
            return redirect()->back()->with('message', 'Transaction deleted successfully!');
        } else {
            return redirect()->back()->with('error', 'Transaction not found or unauthorized access!');
        }
    }

    public function historique()
    {
        $transactionModel = new Transaction();

        // Récupérer toutes les transactions avec leurs catégories
        $data['transactions'] = $transactionModel
            ->select('transactions.*, categories.name as category_name')
            ->join('categories', 'transactions.category_id = categories.id', 'left')
            ->findAll();


        return view('pages/analytics/transaction-history', $data);
    }

    public function statistics()
    {

        $userId = $this->session->get('user_id');
        $currency = $this->userModel->getUser($userId)['currency'];

        $db = db_connect();

        // Lifetime Expense
        $lifetimeExpense = $db->table('transactions')
            ->selectSum('amount', 'total')
            ->where('type', 'Expenses')
            ->get()
            ->getRow();

        // Monthly Avg Income
        $lifetimeIncome = $db->table('transactions')
            ->selectSum('amount', 'total')
            ->where('type', 'Income')
            ->get()
            ->getRow();

        // Total Transactions
        $totalTransactions = $db->table('transactions')
            ->countAllResults();

        // Total Categories
        $totalCategories = $db->table('categories')
            ->countAllResults();

        // Envoyer les données à la vue
        $data = [
            'lifetimeExpense' => $lifetimeExpense->total ?? 0,
            'lifetimeIncome' => $lifetimeIncome->total ?? 0,
            'totalTransactions' => $totalTransactions,
            'totalCategories' => $totalCategories,
            'currency' => $currency,
        ];

        return view('pages/analytics/index', $data);
    }

    public function export()
    {
        // Load the Transactions Model
        $transactionModel = new Transaction();

        // Fetch all transactions using the ORM
        $transactions = $transactionModel->findAll();

        // Generate the PDF content
        $html = '<h1>Transactions List</h1>';
        $html .= '<table border="1" width="100%" cellpadding="5" cellspacing="0">';
        $html .= '<thead>
                    <tr>
                        <th>Type</th>
                        <th>Description</th>
                        <th>Amount</th>
                        <th>Date</th>
                    </tr>
                  </thead>';
        $html .= '<tbody>';
        foreach ($transactions as $transaction) {
            $html .= '<tr>
                        <td>' . $transaction['type'] . '</td>
                        <td>' . $transaction['description'] . '</td>
                        <td>' . $transaction['amount'] . '</td>
                        <td>' . $transaction['created_at'] . '</td>
                      </tr>';
        }
        $html .= '</tbody>';
        $html .= '</table>';
        $html .= '<h4>Generated by TrackWise</h4>';

        // Configure Dompdf
        $options = new Options();
        $options->set('isHtml5ParserEnabled', true);
        $dompdf = new Dompdf($options);

        // Load HTML into Dompdf
        $dompdf->loadHtml($html);

        // Set paper size and orientation
        $dompdf->setPaper('A4', 'portrait');

        // Render the PDF
        $dompdf->render();

        // Output the PDF to the browser
        return $this->response
            ->setHeader('Content-Type', 'application/pdf')
            ->setBody($dompdf->output());
    }
}
