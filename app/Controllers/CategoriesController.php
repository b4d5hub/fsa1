<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Category;
use CodeIgniter\HTTP\ResponseInterface;

class CategoriesController extends BaseController
{
    public function index()
    {
        //
    }
    

    public function submit()
    {
        $categoryModel = new Category();

        // Get data from the form submission
        $name = $this->request->getPost('name');
        $color = $this->request->getPost('color');
        $userId = 1; // Assume user ID is 1 (this should be dynamic for logged-in users)

        // Prepare data to insert
        $data = [
            'name'    => $name,
            'color'   => $color,
            'user_id' => $userId
        ];

        // Validate the form data before saving
        if (!$categoryModel->save($data)) {
            return redirect()->back()->with('errors', $categoryModel->errors());
        }

        return redirect()->to('/categories')->with('success', 'Category added successfully!');
    }
}
