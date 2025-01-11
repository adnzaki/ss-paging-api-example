<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class InsertDumpRecords extends Seeder
{
    public function run()
    {
        $customers = [
            [
                'name' => 'John Doe',
                'email' => 'john.doe@example.com',
                'phone' => '081234567890',
                'address' => 'Jl. Merdeka No. 1',
                'deleted_at' => null,
            ],
            [
                'name' => 'Jane Smith',
                'email' => 'jane.smith@example.com',
                'phone' => '081298765432',
                'address' => 'Jl. Sudirman No. 2',
                'deleted_at' => null,
            ],
            // Tambahkan data lainnya
        ];

        for ($i = 3; $i <= 200; $i++) {
            $customers[] = [
                'name' => "Customer $i",
                'email' => "customer_$i@example.com",
                'phone' => '0812' . str_pad($i, 8, '0', STR_PAD_LEFT),
                'address' => "Jl. Mawar No. $i",
                'deleted_at' => null,
            ];
        }

        // Insert data ke tabel customers
        $this->db->table('customers')->insertBatch($customers);
    }
}
