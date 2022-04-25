<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class ProductSeeder extends Seeder
{
    public function run()
    {
        $data = [
            'name' => 'Odol Pipsodin',
            'category'    => 'utlities',
            'price'    => 10000,
            'stock'    => 100,
        ];

        // Simple Queries
        $this->db->table('products')->insert($data);
        
        $data = [
            'name' => 'Gayung Love',
            'category'    => 'utlities',
            'price'    => 15000,
            'stock'    => 200,
        ];
        // Using Query Builder
        $this->db->table('products')->insert($data);
    }
}