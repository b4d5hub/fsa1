<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Transaction;
use CodeIgniter\HTTP\ResponseInterface;

class ChartController extends BaseController
{
    public function getIncomeVsExpenseData()
    {
        $userId = session()->get('user_id');
        $model = new Transaction();

        // Fetch monthly income and expense data
        $data = $model->select('MONTH(created_at) as month, 
        SUM(CASE WHEN type = "income" THEN amount ELSE 0 END) as income, 
        SUM(CASE WHEN type = "expenses" THEN amount ELSE 0 END) as expense')
            ->where('user_id', $userId) // Filtre par ID utilisateur
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
        $userId = session()->get('user_id'); // Récupère l'ID de l'utilisateur connecté

        if (!$userId) {
            return $this->response->setJSON([
                'error' => true,
                'message' => 'User not authenticated'
            ], 401); // Code 401 : Non autorisé
        }

        try {
            // Récupère les données de revenus groupées par catégorie pour l'utilisateur authentifié
            $query = $db->query("
                SELECT 
                    c.name AS category_name, 
                    SUM(t.amount) AS total
                FROM transactions t
                JOIN categories c ON t.category_id = c.id
                WHERE t.type = 'Income' AND t.user_id = ?
                GROUP BY c.name
                ORDER BY total DESC
            ", [$userId]);

            $chartData = $query->getResultArray();

            // Construire et retourner la réponse JSON
            return $this->response->setJSON([
                'labels' => array_column($chartData, 'category_name'),
                'data'   => array_map('floatval', array_column($chartData, 'total')),
            ]);
        } catch (\Exception $e) {
            // Gérer les erreurs et retourner une réponse JSON appropriée
            return $this->response->setJSON([
                'error' => true,
                'message' => $e->getMessage(),
            ]);
        }
    }

    public function getExpensesData()
    {
        $db = db_connect();
        $userId = session()->get('user_id'); // Récupère l'ID de l'utilisateur connecté

        if (!$userId) {
            return $this->response->setJSON([
                'error' => true,
                'message' => 'User not authenticated'
            ], 401); // Code 401 : Non autorisé
        }

        try {
            // Récupère les données de dépenses groupées par catégorie pour l'utilisateur authentifié
            $query = $db->query("
                SELECT 
                    c.name AS category_name, 
                    SUM(t.amount) AS total
                FROM transactions t
                JOIN categories c ON t.category_id = c.id
                WHERE t.type = 'Expenses' AND t.user_id = ?
                GROUP BY c.name
                ORDER BY total DESC
            ", [$userId]);

            $chartData = $query->getResultArray();

            // Construire et retourner la réponse JSON
            return $this->response->setJSON([
                'labels' => array_column($chartData, 'category_name'),
                'data'   => array_column($chartData, 'total'),
            ]);
        } catch (\Exception $e) {
            // Gérer les erreurs et retourner une réponse JSON appropriée
            return $this->response->setJSON([
                'error' => true,
                'message' => $e->getMessage(),
            ]);
        }
    }

    public function getTransactionDataforAreaChart()
    {
        $timeframe = $this->request->getGet('timeframe') ?? 'day'; // Default to 'day'
        $model = new Transaction();

        // Define the date range and grouping based on the timeframe
        $startDate = null;
        $groupBy = null;
        $selectDate = null;

        switch ($timeframe) {
            case 'day': // Daily transactions for the current month
                $startDate = date('Y-m-01'); // First day of the current month
                $groupBy = 'DATE(created_at)';
                $selectDate = 'DATE(created_at)';
                break;

            case 'week': // Weekly transactions for the current month
                $startDate = date('Y-m-01'); // First day of the current month
                $groupBy = 'YEARWEEK(created_at, 1)'; // Group by year and ISO week
                $selectDate = "DATE_FORMAT(DATE_ADD(created_at, INTERVAL(1 - DAYOFWEEK(created_at)) DAY), '%Y-%m-%d')"; // Start of the week
                break;

            case 'month': // Monthly transactions for the current year
                $startDate = date('Y-01-01'); // First day of the current year
                $groupBy = 'MONTH(created_at)';
                $selectDate = "DATE_FORMAT(created_at, '%Y-%m')"; // Year and month
                break;

            case 'year': // Yearly transactions of all years
                $startDate = null; // No restriction on start date
                $groupBy = 'YEAR(created_at)';
                $selectDate = 'YEAR(created_at)'; // Year only
                break;

            default: // Default to daily for the current month
                $startDate = date('Y-m-01');
                $groupBy = 'DATE(created_at)';
                $selectDate = 'DATE(created_at)';
                break;
        }

        // Build the query
        $query = $model->select("$selectDate as date, 
                                 SUM(CASE WHEN type = 'expenses' THEN amount ELSE 0 END) as expenses, 
                                 SUM(CASE WHEN type = 'income' THEN amount ELSE 0 END) as income");

        if ($startDate !== null) {
            $query->where('DATE(created_at) >=', $startDate);
        }

        $data = $query->groupBy($groupBy)
            ->orderBy('created_at', 'ASC')
            ->findAll();

        return $this->response->setJSON($data);
    }
}
