<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class BudgetController extends BaseController
{
    public function index()
    {
        $budget_demo = 0;
        return view("pages/budget", ["budget" => $budget_demo]);
    }
}
