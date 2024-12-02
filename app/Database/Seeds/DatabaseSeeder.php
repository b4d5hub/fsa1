<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use Faker\Factory;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $faker = Factory::create();

        $userData = [
            'name' => 'Badr Eddine OUAJIH',
            'email' => 'badreddine@ouajih.com',
            'password' => password_hash('12345678', PASSWORD_BCRYPT),
            'budget' => 3500.00,
            'currency' => 'MAD',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            'budget_email_sent' => false,
        ];
        $this->db->table('users')->insert($userData);
        $userId = $this->db->insertID();

        // Step 2: Create Categories for the User
        $categories = [
            ['name' => 'Food', 'color' => '#FF5733'],
            ['name' => 'Transport', 'color' => '#33FF57'],
            ['name' => 'Health', 'color' => '#3357FF'],
            ['name' => 'Entertainment', 'color' => '#FF33A1'],
            ['name' => 'Utilities', 'color' => '#FFD733'],
        ];

        foreach ($categories as &$category) {
            $category['user_id'] = $userId;
            $category['created_at'] = date('Y-m-d H:i:s');
            $category['updated_at'] = date('Y-m-d H:i:s');
        }

        $this->db->table('categories')->insertBatch($categories);

        // Fetch the inserted category IDs
        $categoryIds = $this->db->table('categories')->select('id')->where('user_id', $userId)->get()->getResultArray();
        $categoryIds = array_column($categoryIds, 'id');

        // Step 3: Create Transactions for the User
        $transactions = [];
        for ($i = 0; $i < 230; $i++) {
            $transactions[] = [
                'type' => $faker->randomElement(['Income', 'Expenses']),
                'category_id' => $faker->randomElement($categoryIds),
                'user_id' => $userId,
                'description' => substr($faker->sentence, 0, 60),
                'amount' => $faker->randomNumber(2, 10, 500),
                'currency' => 'MAD',
                'created_at' => $faker->dateTimeBetween('-3 year', 'now')->format('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ];
        }

        usort($transactions, function ($a, $b) {
            return strtotime($a['created_at']) - strtotime($b['created_at']);
        });

        $this->db->table('transactions')->insertBatch($transactions);
    }
}
