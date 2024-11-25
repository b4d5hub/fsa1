<?php

namespace App\Models;

use CodeIgniter\Model;

class Transaction extends Model
{

    protected $table = 'transactions';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'type',
        'category_id',
        'user_id',
        'description',
        'amount',
        'currency',
        'created_at',
        'updated_at'
    ];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';


    public function getTotalExpenses($userId)
    {
        $result = $this->select('SUM(transactions.amount) as total_expenses')
            ->where('transactions.user_id', $userId)
            ->where('transactions.type', 'Expenses')
            ->get()
            ->getRow(); // Get a single row as an object

        return $result ? $result->total_expenses : 0; // Return the total, or 0 if no expenses found
    }

    public function getTotalIncome($userId)
    {
        $result = $this->select('SUM(transactions.amount) as total_income')
            ->where('transactions.user_id', $userId)
            ->where('transactions.type', 'Income')
            ->get()
            ->getRow(); // Get a single row as an object

        return $result ? $result->total_income : 0; // Return the total, or 0 if no expenses found
    }

    public function getLastMonthExpenses($userId)
    {
        return $this->select('SUM(amount) as total_expenses')
            ->where('user_id', $userId)
            ->where('type', 'Expenses')
            ->where('DATE_FORMAT(created_at, "%Y-%m") = DATE_FORMAT(DATE_SUB(NOW(), INTERVAL 1 MONTH), "%Y-%m")')
            ->get()
            ->getRow()
            ->total_expenses ?? 0;
    }

    public function getLastMonthIncome($userId)
    {
        return $this->select('SUM(amount) as total_income')
            ->where('user_id', $userId)
            ->where('type', 'Income')
            ->where('DATE_FORMAT(created_at, "%Y-%m") = DATE_FORMAT(DATE_SUB(NOW(), INTERVAL 1 MONTH), "%Y-%m")')
            ->get()
            ->getRow()
            ->total_income ?? 0;
    }

    public function getLastMonthBalance($userId)
    {
        // Calculate total income for last month
        $incomeResult = $this->select('SUM(amount) as total_income')
            ->where('user_id', $userId)
            ->where('type', 'Income')
            ->where('DATE_FORMAT(created_at, "%Y-%m") = DATE_FORMAT(DATE_SUB(NOW(), INTERVAL 1 MONTH), "%Y-%m")')
            ->get()
            ->getRow();

        $totalIncome = $incomeResult ? $incomeResult->total_income : 0;

        // Calculate total expenses for last month
        $expenseResult = $this->select('SUM(amount) as total_expenses')
            ->where('user_id', $userId)
            ->where('type', 'Expenses')
            ->where('DATE_FORMAT(created_at, "%Y-%m") = DATE_FORMAT(DATE_SUB(NOW(), INTERVAL 1 MONTH), "%Y-%m")')
            ->get()
            ->getRow();

        $totalExpenses = $expenseResult ? $expenseResult->total_expenses : 0;

        // Calculate and return last month's balance
        return $totalIncome - $totalExpenses;
    }

    public function getTotalBalance($userId)
    {
        // Fetch total income
        $incomeResult = $this->select('SUM(transactions.amount) as total_income')
            ->where('transactions.user_id', $userId)
            ->where('transactions.type', 'Income')
            ->get()
            ->getRow();

        $totalIncome = $incomeResult ? $incomeResult->total_income : 0;

        // Fetch total expenses
        $expenseResult = $this->select('SUM(transactions.amount) as total_expenses')
            ->where('transactions.user_id', $userId)
            ->where('transactions.type', 'Expenses')
            ->get()
            ->getRow();

        $totalExpenses = $expenseResult ? $expenseResult->total_expenses : 0;

        // Calculate and return total balance
        return $totalIncome - $totalExpenses;
    }

    public function getTransactionsByUser($userId)
    {
        return $this->where('user_id', $userId)->findAll();
    }

    public function getTransactionsWithCategory($userId)
    {
        return $this->select('transactions.*, categories.name as category_name, categories.color as category_color')
            ->join('categories', 'transactions.category_id = categories.id')
            ->where('transactions.user_id', $userId)
            ->findAll();
    }
    public function getIncomeTransactions($userId)
    {
        return $this->select('transactions.*, categories.name as category_name, categories.color as category_color')
            ->join('categories', 'transactions.category_id = categories.id')
            ->where('transactions.user_id', $userId)
            ->where('transactions.type', 'Income') // Filter for income transactions
            ->findAll();
    }
    public function getExponsesTransactions($userId)
    {
        return $this->select('transactions.*, categories.name as category_name, categories.color as category_color')
            ->join('categories', 'transactions.category_id = categories.id')
            ->where('transactions.user_id', $userId)
            ->where('transactions.type', 'Expenses') // Filter for income transactions
            ->findAll();
    }

    public function getTopExpensesCategories($userId)
    {
        return $this->select('categories.name, categories.color, SUM(transactions.amount) as total_amount')
            ->join('categories', 'transactions.category_id = categories.id')
            ->where('transactions.user_id', $userId)
            ->where('transactions.type', 'Expenses')
            ->groupBy('categories.id')
            ->orderBy('total_amount', 'DESC')
            ->limit(3)
            ->findAll();
    }
}
