<?php

namespace Database\Seeders;

use App\Models\JobOrder;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class JobOrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       JobOrder::create([
            'name' => 'Demo Work',
            'date' => '2025-06-10',
            'jos_date' => '2025-06-10',
            'type_of_work_id' => 1, 
            'contractor_id' => 6,
            'conductor_id' => 6,
            'actual_work_completed' => 20,
            'remarks' => 'Test Order',
            'reference_number' => 'JO-202506-001',
        ]);

    }
}
