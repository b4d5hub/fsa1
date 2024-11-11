<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Category;
use App\Models\Transaction;
use CodeIgniter\HTTP\ResponseInterface;

class CategoriesController extends BaseController
{
    protected $categoryModel;
    protected $transactionModel;
    protected $session;

    public function __construct()
    {
        $this->session = \Config\Services::session();
        $this->categoryModel = new Category();
    }


    public function index()
    {
        $userId = $this->session->get('user_id');

        $categories = $this->categoryModel->getCategoriesByUser($userId);

        return view('/pages/categories', ['categories' => $categories]);
    }


    public function submit()
    {
        $categoryModel = new Category();

        $name = $this->request->getPost('name');
        $color = $this->request->getPost('color');
        $userId = $this->session->get('user_id');

        $data = [
            'name'    => $name,
            'color'   => $color,
            'user_id' => $userId
        ];

        if (!$categoryModel->save($data)) {
            return redirect()->to('/categories')->with('errors', $categoryModel->errors());
        }

        return redirect()->to('/categories')->with('success', 'Category added successfully!');
    }

    public function deleteCategory($categoryId)
    {
        $userId = $this->session->get('user_id');
        $category = $this->categoryModel->where('id', $categoryId)
            ->where('user_id', $userId)
            ->first();

        if ($category) {
            $this->categoryModel->delete($categoryId);
            return redirect()->back()->with('message', 'Category deleted successfully!');
        } else {
            return redirect()->back()->with('error', 'Category not found or unauthorized access!');
        }
    }
}
