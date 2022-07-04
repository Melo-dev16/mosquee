<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class EventSeeder extends Seeder
{
    public function run()
    {
        $data = [
            'image' => 'darth'
        ];

        // Using Query Builder
        $this->db->table('event')->insert($data);
    }
}