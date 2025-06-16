<?php

namespace Database\Seeders;

use App\Models\Contractor;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ContractorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Contractor::insert([
        [
            'name' => 'Ramesh Sharma',
            'code' => 'CONT001',
            'email' => 'ramesh@yopmail.com',
            'phone_number' => '1234567890',
            'company_name' => 'Sharma Constructions',
            'balance' => 0,
            'created_at' => now(),
            'updated_at' => now()
        ],
        [
            'name' => 'Akash Kumar',
            'code' => 'CONT002',
            'email' => 'akash@yopmail.com',
            'phone_number' => '9876543109',
            'company_name' => 'Kumar Constructions',
            'balance' => 0,
            'created_at' => now(),
            'updated_at' => now()
        ],
        ]);
    }
}
