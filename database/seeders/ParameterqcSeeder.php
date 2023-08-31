<?php

namespace Database\Seeders;

use App\Models\Parameterqc;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ParameterqcSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Parameterqc::factory(10)->create();
    }
}
