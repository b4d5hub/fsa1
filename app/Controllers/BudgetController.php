<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Category;
use App\Models\Transaction;
use App\Models\UserModel;
use CodeIgniter\HTTP\ResponseInterface;

class BudgetController extends BaseController
{
    protected $session;
    protected $userModel;
    protected $categoryModel;
    protected $transactionModel;

    public function __construct()
    {
        $this->session = \Config\Services::session();
        $this->userModel = new UserModel();
        $this->categoryModel = new Category();
        $this->transactionModel = new Transaction();
    }

    public function index()
    {
        $userId = $this->session->get('user_id');
        $curuser = $this->userModel->getUser($userId);
        $categories = $this->categoryModel->getCategoriesByUser($userId);
        $topExpenseCategories = $this->transactionModel->getTopExpensesCategories($userId);

        $spent = $this->transactionModel
            ->selectSum('amount', 'total_spent')
            ->where('user_id', $userId)
            ->where('type', 'Expenses')
            ->get()
            ->getRow()
            ->total_spent ?? 0;

        $remaining = max(0, $curuser['budget'] - $spent);

        $percentageSpent = $curuser['budget'] > 0
            ? round(($spent / $curuser['budget']) * 100, 2)
            : 0;

        return view("pages/budget", [
            'curuser' => $curuser,
            'categories' => $categories,
            'topExpenseCategories' => $topExpenseCategories,
            'spent' => $spent,
            'remaining' => $remaining,
            'percentageSpent' => $percentageSpent
        ]);
    }

    public function setbudget()
    {
        $userId = $this->session->get('user_id');
        $budget = $this->request->getPost('budget');

        if (!$budget) {
            return redirect()->to('/budget')->with('error', 'Please provide a valid budget value.');
        }

        $data = ['budget' => $budget];

        if ($this->userModel->update($userId, $data)) {
            return redirect()->to('/budget')->with('error', 'Failed to update budget.');
        }
        return redirect()->to('/budget')->with('message', 'Budget updated successfully!');
    }
}
