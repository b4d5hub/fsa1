<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Category;
use App\Models\Transaction;
use CodeIgniter\HTTP\ResponseInterface;

class AnalyticsController extends BaseController
{
    protected $transactionModel;
    protected $categoryModel;
    protected $session;



    public function __construct()
    {
        $this->session = \Config\Services::session();
        $this->transactionModel = new Transaction();
        $this->categoryModel = new Category();
    }
    public function income()
    {
        $userId = $this->session->get('user_id');

        // Fetch categories associated with the user
        $categories = $this->categoryModel->getCategoriesByUser($userId);
        $transactions = $this->transactionModel->getIncomeTransactions($userId);

        return view('/pages/analytics/income', ['categories' => $categories, 'transactions' => $transactions]);
    }
    public function expenses()
    {
        $userId = $this->session->get('user_id');

        // Fetch categories associated with the user
        $categories = $this->categoryModel->getCategoriesByUser($userId);
        $transactions = $this->transactionModel->getExponsesTransactions($userId);

        return view('/pages/analytics/expenses', ['categories' => $categories, 'transactions' => $transactions]);
    }

}
