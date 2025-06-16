<?php

namespace Database\Seeders;

use App\Models\Conductor;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ConductorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Conductor::insert([
            [
                'first_name' => 'Amit',
                'middle_name' => null,
                'last_name' => 'Verma',
                'staff_id' => 'STF001',
                'email' => 'amit@yopmail.com',
                'phone_number' => '1212121212',
                'department_name' => 'Operations',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'first_name' => 'Rahul',
                'middle_name' => null,
                'last_name' => 'Singh',
                'staff_id' => 'STF002',
                'email' => 'rahul@yopmail.com',
                'phone_number' => '2314231421',
                'department_name' => 'Ground Team',
                'created_at' => now(),
                'updated_at' => now()
            ]

        ]);
    }
}
