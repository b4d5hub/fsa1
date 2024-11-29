<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Transaction;
use App\Models\UserModel;
use CodeIgniter\HTTP\ResponseInterface;

class DashboardController extends BaseController
{
    protected $session;
    protected $transactionModel;
    protected $userModel;


    public function __construct()
    {
        $this->session = \Config\Services::session();
        $this->transactionModel = new Transaction();
        $this->userModel = new UserModel();
    }

    public function index()
    {
        $userId = $this->session->get('user_id');
        $user = $this->userModel->getUser($userId);

        $transactions = $this->transactionModel->getTransactionsWithCategory($userId);


        $userexpenses = $this->transactionModel->getTotalExpenses($userId);
        $userincome = $this->transactionModel->getTotalIncome($userId);

        $totalbalance = $this->transactionModel->getTotalBalance($userId);

        $lastMonthBalance = $this->transactionModel->getLastMonthBalance($userId);
        $balancePercentage = $lastMonthBalance > 0
            ? (($totalbalance - $lastMonthBalance) / $lastMonthBalance) * 100
            : 0;

        $lastMonthExpenses = $this->transactionModel->getLastMonthExpenses($userId);
        $lastMonthIncome = $this->transactionModel->getLastMonthIncome($userId);
        $expensePercentage = $lastMonthExpenses > 0 ? (($userexpenses - $lastMonthExpenses) / $lastMonthExpenses) * 100 : 0;
        $incomePercentage = $lastMonthIncome > 0 ? (($userincome - $lastMonthIncome) / $lastMonthIncome) * 100 : 0;

        return view(
            'pages/dashboard',
            [
                'userexpenses' => $userexpenses,
                'user' => $user,
                'transactions' => $transactions,
                'totalbalance' => $totalbalance,
                'userincome' => $userincome,
                'lastMonthExpenses' => $lastMonthExpenses,
                'lastMonthIncome' => $lastMonthIncome,
                'expensePercentage' => $expensePercentage,
                'incomePercentage' => $incomePercentage,
                'lastMonthBalance' => $lastMonthBalance,
                'balancePercentage' => $balancePercentage
            ]
        );
    }

    public function getBalanceTrends()
    {
        $userId = $this->session->get('user_id');

        // Example: Fetch balance trends for the past 7 days
        $transactions = $this->transactionModel->select("DATE(created_at) as date, SUM(CASE WHEN type = 'Income' THEN amount ELSE 0 END) as income, SUM(CASE WHEN type = 'Expenses' THEN amount ELSE 0 END) as expenses")
            ->where('user_id', $userId)
            ->groupBy("DATE(created_at)")
            ->orderBy("DATE(created_at)", "ASC")
            ->limit(7)
            ->get()
            ->getResultArray();

        // Transform the data for the chart
        $labels = [];
        $incomes = [];
        $expenses = [];

        foreach ($transactions as $transaction) {
            $labels[] = date('d M', strtotime($transaction['date']));
            $incomes[] = $transaction['income'];
            $expenses[] = $transaction['expenses'];
        }

        return $this->response->setJSON([
            'labels' => $labels,
            'datasets' => [
                'income' => $incomes,
                'expenses' => $expenses,
            ]
        ]);
    }
}
