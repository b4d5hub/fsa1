<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Category;
use App\Models\UserModel;
use CodeIgniter\HTTP\ResponseInterface;

class BudgetController extends BaseController
{
    protected $session;
    protected $userModel;
    protected $categoryModel;

    public function __construct()
    {
        $this->session = \Config\Services::session();
        $this->userModel = new UserModel();
        $this->categoryModel = new Category();
    }

    public function index()
    {
        $userId = $this->session->get('user_id');
        $curuser = $this->userModel->getUser($userId);
        $categories = $this->categoryModel->getCategoriesByUser($userId);
        return view("pages/budget", ['curuser' => $curuser, 'categories' => $categories]);
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
