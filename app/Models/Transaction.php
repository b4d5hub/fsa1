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
}
