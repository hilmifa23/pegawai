<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PegawaiTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('pegawais')->insert([
            [
                'nama_pegawai' => 'Ahmad Riyadi',
                'jenis_kelamin' => 'Laki-laki',
                'tanggal_lahir' => '1990-01-15',
                'id_departemens' => 1,
                'email' => 'ahmad.riyadi@example.com',
                'nomor_hp' => '081234567890',
                'alamat' => 'Jl. Merdeka No. 10, Jakarta',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_pegawai' => 'Siti Aisyah',
                'jenis_kelamin' => 'Perempuan',
                'tanggal_lahir' => '1992-05-20',
                'id_departemens' => 2,
                'email' => 'siti.aisyah@example.com',
                'nomor_hp' => '081298765432',
                'alamat' => 'Jl. Sudirman No. 5, Bandung',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_pegawai' => 'Roni Bagus',
                'jenis_kelamin' => 'Laki-laki',
                'tanggal_lahir' => '1996-04-24',
                'id_departemens' => 3,
                'email' => 'roni.bagus@example.com',
                'nomor_hp' => '081298765423',
                'alamat' => 'Jl. Ahmad Yani No. 2, Bandung',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
