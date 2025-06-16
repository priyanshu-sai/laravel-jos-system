<?php

namespace Database\Seeders;

use App\Models\TypeOfWork;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TypeOfWorkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TypeOfWork::insert([
        [
            'name' => 'Electrical Work',
            'rate' => 500.00,
            'code' => 'ELEC',
            'created_at' => now(),
            'updated_at' => now()
        ],
        [
            'name' => 'Plumbing',
            'rate' => 300.00,
            'code' => 'PLUMB',
            'created_at' => now(),
            'updated_at' => now()
        ],
        [
            'name' => 'Painter',
            'rate' => 700.00,
            'code' => 'PANT',
            'created_at' => now(),
            'updated_at' => now()
        ],
        [
            'name' => 'Carpainter',
            'rate' => 900.00,
            'code' => 'CARPANT',
            'created_at' => now(),
            'updated_at' => now()
        ]
    ]);

    }
}
