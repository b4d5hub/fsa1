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
}
