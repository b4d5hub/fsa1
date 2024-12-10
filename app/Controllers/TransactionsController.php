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
        $user = $this->userModel->getUser($userId);

        // Retrieve form data
        $type = $this->request->getPost('type');
        $categoryId = $this->request->getPost('category');
        $description = $this->request->getPost('description');
        $amount = $this->request->getPost('amount');
        $currency = $this->userModel->getUser($userId)['currency'];

        if ($type && $categoryId && $description && $amount && $currency) {
            $this->transactionModel->save([
                'type' => $type,
                'category_id' => $categoryId,
                'description' => $description,
                'amount' => $amount,
                'currency' => $currency,
                'user_id' => $userId
            ]);
        } else {
            return redirect()->to('/transactions')->with('error', 'All fields must be filled');
        }


        // Get the latest transaction date for the user
        $transactionModel = new Transaction();
        $latestTransaction = $transactionModel
            ->where('user_id', $userId)
            ->orderBy('created_at', 'DESC')
            ->findAll(1, 1);
        $lasttrandate = $latestTransaction[0]['created_at'];

        if ($latestTransaction) {
            $latestDate = new \DateTime($lasttrandate);
            $newDate = new \DateTime();

            // Check if the new transaction is in a new month
            if ($latestDate->format('Y-m') < $newDate->format('Y-m')) {
                // Reset the budget_email_sent flag for the user
                $this->userModel->update($userId, ['budget_email_sent' => false]);
            }
        }

        // $currentMonthIncome = $this->transactionModel->getCurrentMonthIncome($userId);
        // $currentMonthBalance = $currentMonthIncome - $currentMonthExpenses;
        $currentMonthExpenses = $this->transactionModel->getCurrentMonthExpenses($userId);

        $budget = $this->userModel->getUser($userId)['budget'];

        if ($currentMonthExpenses > $budget && $type = 'Expenses' && !$user['budget_email_sent']) {

            // Get user's email
            $userEmail = $user['email'];

            // Send warning email
            $email = \Config\Services::email();
            $email->setFrom('trackwisecom@gmail.com', 'TrackWise');
            $email->setTo($userEmail);
            $email->setReplyTo('trackwisecom@gmail.com', 'TrackWise');
            $email->setSubject('Budget Exceeded Warning');
            $email->setMessage(
                "Dear User,\n\nYour total expenses of $currency" . number_format($currentMonthExpenses, 0) .
                    " has exceeded your monthly budget of $currency" . number_format($budget, 0) .
                    ".\n\nPlease review your transactions.\n\nBest regards,\nTrackWise Team"
            );
            if (!$email->send()) {
                return redirect()->to('/transactions')->with('error', 'Transaction added successfully! SMTP error occured, notify the WebMaster as soon as possible!');
            }
            $this->userModel->update($userId, ['budget_email_sent' => true]);
        }



        return redirect()->to('/transactions')->with('message', 'Transaction added successfully!');
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
            return redirect()->to('/transactions')->with('message', 'Transaction updated successfully!');
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
        $userId = session()->get('user_id');
        $transactionModel = new Transaction();

        // Récupérer les transactions de l'utilisateur connecté avec leurs catégories
        $data['transactions'] = $transactionModel
            ->select('transactions.*, categories.name as category_name')
            ->join('categories', 'transactions.category_id = categories.id', 'left')
            ->where('transactions.user_id', $userId)
            ->findAll();

        return view('pages/analytics/transaction-history', $data);
    }


    public function statistics()
    {
        $userId = session()->get('user_id');

        $currency = $this->userModel->getUser($userId)['currency'];
        $db = db_connect();


        $TotaleExpense = $db->table('transactions')
            ->selectSum('amount', 'total')
            ->where('type', 'Expenses')
            ->where('user_id', $userId) // Filtrer par utilisateur
            ->get()
            ->getRow();


        $TotaleIncome = $db->table('transactions')
            ->selectSum('amount', 'total')
            ->where('type', 'Income')
            ->where('user_id', $userId)
            ->get()
            ->getRow();

        $totalTransactions = $db->table('transactions')
            ->where('user_id', $userId)
            ->countAllResults();


        $totalCategories = $db->table('categories')
            ->where('user_id', $userId)
            ->countAllResults();

        // Préparer les données pour la vue
        $data = [
            'lifetimeExpense' => $TotaleExpense->total ?? 0,
            'lifetimeIncome' => $TotaleIncome->total ?? 0,
            'totalTransactions' => $totalTransactions,
            'totalCategories' => $totalCategories,
            'currency' => $currency,
        ];

        return view('pages/analytics/index', $data);
    }


    public function exportall()
    {
        $transactionModel = new Transaction();
        $userId = session()->get('user_id');
        $transactions = $transactionModel->getTransactionsByUser($userId);

        // Generate the PDF content
        $html = '<h1>Full Transactions List</h1>';
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

        // Download the PDF
        $this->response->setHeader('Content-Type', 'application/pdf');
        $this->response->setHeader('Content-Disposition', 'attachment; filename="transactions_list.pdf"');

        return $this->response->setBody($dompdf->output());
    }

    public function exportincome()
    {
        $transactionModel = new Transaction();
        $userId = session()->get('user_id');
        $transactions = $transactionModel->getIncomeTransactions($userId);

        // Generate the PDF content
        $html = '<h1>Income Transactions List</h1>';
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

        // Download the PDF
        $this->response->setHeader('Content-Type', 'application/pdf');
        $this->response->setHeader('Content-Disposition', 'attachment; filename="income_transactions_list.pdf"');

        return $this->response->setBody($dompdf->output());
    }

    public function exportexpenses()
    {
        $transactionModel = new Transaction();
        $userId = session()->get('user_id');
        $transactions = $transactionModel->getExponsesTransactions($userId);

        // Generate the PDF content
        $html = '<h1>Expense Transactions List</h1>';
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

        // Download the PDF
        $this->response->setHeader('Content-Type', 'application/pdf');
        $this->response->setHeader('Content-Disposition', 'attachment; filename="expenses_transactions_list.pdf"');

        return $this->response->setBody($dompdf->output());
    }
}
