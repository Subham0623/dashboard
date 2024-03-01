<?php

namespace Database\Seeders;

use App\Models\Province;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProvinceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['code' => 'P01', 'name' => 'Koshi Pradesh'],
            ['code' => 'P02', 'name' => 'Madesh Pradesh'],
            ['code' => 'P03', 'name' => 'Bagmati Pradesh'],
            ['code' => 'P04', 'name' => 'Gandaki Pradesh'],
            ['code' => 'P05', 'name' => 'Lumbini Pradesh'],
            ['code' => 'P06', 'name' => 'Karnali Pradesh'],
            ['code' => 'P07', 'name' => 'Sudurpaschim Pradesh'],
        ];

        Province::insert($data);
    }
}
