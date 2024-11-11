<?php

namespace App\Models;

use CodeIgniter\Model;

class Category extends Model
{
    protected $table            = 'categories';
    protected $primaryKey       = 'id';
    protected $allowedFields    = ['name', 'color', 'user_id'];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [
        'name'  => 'required|min_length[3]|max_length[255]',
        'color' => 'required',
        'user_id' => 'required|integer'
    ];

    public function getCategories()
    {
        return $this->findAll();
    }

    public function getCategoriesByUser($userId)
    {
        return $this->where('user_id', $userId)->findAll();
    }
}
