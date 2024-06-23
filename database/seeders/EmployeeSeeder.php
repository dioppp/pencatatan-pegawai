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
            'nik' => '3574042406240001',
            'nama' => 'Dika Rizky Yunianto, S.Kom., M.Kom.',
            'tanggal_lahir' => '1990-09-09',
            'jenis_kelamin' => 'Laki-laki',
            'alamat' => 'Malang',
            'no_hp' => '081234567890',
            'email' => 'dika@simpeg.com',
            'pendidikan' => 'S2',
            'departemen' => 'IT',
            'jabatan' => 'Head of Department',
            'status' => 'Tetap',
            'gaji' => '40000000',
            'tanggal_masuk' => '2010-10-10',
            'foto' => 'employees-images/pak-dika.png',
            'created_by' => 'Seeder',
            'updated_by' => 'Seeder',
            'created_at' => now(),
        ]);

        DB::table('employees')->insert([
            'nik' => '3574042406240002',
            'nama' => 'Frisaranda Diouf Julio',
            'tanggal_lahir' => '2002-07-02',
            'jenis_kelamin' => 'Laki-laki',
            'alamat' => 'Probolinggo',
            'no_hp' => '081234567891',
            'email' => 'admin@simpeg.com',
            'pendidikan' => 'D4',
            'departemen' => 'IT',
            'jabatan' => 'Full Stack Web Developer',
            'status' => 'Tetap',
            'gaji' => '30000000',
            'tanggal_masuk' => '2011-10-10',
            'foto' => 'employees-images/diouf.jpg',
            'created_by' => 'Seeder',
            'updated_by' => 'Seeder',
            'created_at' => now(),
        ]);

        DB::table('employees')->insert([
            'nik' => '3574042406240003',
            'nama' => 'Hilman Zahrawa Budiarto',
            'tanggal_lahir' => '2003-03-23',
            'jenis_kelamin' => 'Laki-laki',
            'alamat' => 'Malang',
            'no_hp' => '081234567892',
            'email' => 'hilman@simpeg.com',
            'pendidikan' => 'D4',
            'departemen' => 'IT',
            'jabatan' => 'Quality Assurance',
            'status' => 'Tetap',
            'gaji' => '30000000',
            'tanggal_masuk' => '2012-10-10',
            'foto' => 'employees-images/hilman.jpg',
            'created_by' => 'Seeder',
            'updated_by' => 'Seeder',
            'created_at' => now(),
        ]);

        DB::table('employees')->insert([
            'nik' => '3574042406240004',
            'nama' => 'Saka Nabil',
            'tanggal_lahir' => '2004-04-02',
            'jenis_kelamin' => 'Laki-laki',
            'alamat' => 'Lombok',
            'no_hp' => '081234567893',
            'email' => 'saka@simpeg.com',
            'pendidikan' => 'D4',
            'departemen' => 'IT',
            'jabatan' => 'UI/UX Designer',
            'status' => 'Tetap',
            'gaji' => '30000000',
            'tanggal_masuk' => '2013-10-10',
            'foto' => 'employees-images/saka.png',
            'created_by' => 'Seeder',
            'updated_by' => 'Seeder',
            'created_at' => now(),
        ]);
    }
}
