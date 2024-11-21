<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Transaction;
use CodeIgniter\HTTP\ResponseInterface;

class ChartController extends BaseController
{
    public function getIncomeVsExpenseData()
    {
        $model = new Transaction();

        // Fetch monthly income and expense data
        $data = $model->select('MONTH(created_at) as month, 
        SUM(CASE WHEN type = "income" THEN amount ELSE 0 END) as income, 
        SUM(CASE WHEN type = "expenses" THEN amount ELSE 0 END) as expense')
->groupBy('MONTH(created_at)')
->findAll();

        // Prepare the response
        $response = [
            'labels' => [],
            'incomeData' => [],
            'expenseData' => []
        ];

        foreach ($data as $row) {
            $response['labels'][] = date('M', mktime(0, 0, 0, $row['month'], 1)); // Convert month number to name
            $response['incomeData'][] = $row['income'];
            $response['expenseData'][] = $row['expense'];
        }

        return $this->response->setJSON($response);
    }
    public function getIncomeData()
{
    $db = db_connect();

    try {
        // Fetch income data grouped by category
        $query = $db->query("
            SELECT 
                c.name AS category_name, 
                SUM(t.amount) AS total
            FROM transactions t
            JOIN categories c ON t.category_id = c.id
            WHERE t.type = 'Income'
            GROUP BY c.name
            ORDER BY total DESC
        ");

        $chartData = $query->getResultArray();

        // Build and return the JSON response
        return $this->response->setJSON([
            'labels' => array_column($chartData, 'category_name'),
            'data'   => array_column($chartData, 'total'),
        ]);
    } catch (\Exception $e) {
        // Handle errors and return a proper JSON error response
        return $this->response->setJSON([
            'error' => true,
            'message' => $e->getMessage(),
        ]);
    }

}
public function getExpensesData()//voici la fonction de chart expenses
{
    $db = db_connect();

    try {
        // Fetch income data grouped by category
        $query = $db->query("
            SELECT 
                c.name AS category_name, 
                SUM(t.amount) AS total
            FROM transactions t
            JOIN categories c ON t.category_id = c.id
            WHERE t.type = 'Expenses'
            GROUP BY c.name
            ORDER BY total DESC
        ");

        $chartData = $query->getResultArray();

        // Build and return the JSON response
        return $this->response->setJSON([
            'labels' => array_column($chartData, 'category_name'),
            'data'   => array_column($chartData, 'total'),
        ]);
    } catch (\Exception $e) {
        // Handle errors and return a proper JSON error response
        return $this->response->setJSON([
            'error' => true,
            'message' => $e->getMessage(),
        ]);
    }
    
}
}
