<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('employees')->insert([
            'nik' => '3574040207050001',
            'nama' => 'Agus Leonidas',
            'tanggal_lahir' => '1990-09-09',
            'jenis_kelamin' => 'Laki-laki',
            'alamat' => 'Jl. in aja dulu',
            'no_hp' => '081234567890',
            'email' => 'admin@simpeg.com',
            'pendidikan' => 'S1',
            'departemen' => 'IT',
            'jabatan' => 'Kepala Bagian',
            'status' => 'Tetap',
            'gaji' => '10000000',
            'tanggal_masuk' => '2010-10-10',
            'foto' => 'default.jpg',
            'created_by' => 'Seeder',
            'updated_by' => 'Seeder',
            'created_at' => now(),
        ]);
    }
}
