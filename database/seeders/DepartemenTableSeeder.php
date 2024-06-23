<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DepartemenTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('departemens')->insert([
            [
                'nama_departemen' => 'Human Resources',
            ],
            [
                'nama_departemen' => 'Finance',
            ],
            [
                'nama_departemen' => 'IT',
            ]
        ]);
    }
}
