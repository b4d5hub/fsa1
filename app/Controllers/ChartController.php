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
    }public function getIncomeData()
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
}
