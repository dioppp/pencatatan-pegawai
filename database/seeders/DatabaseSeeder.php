<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'Agus Leonidas',
            'email' => 'admin@simpeg.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'created_at' => now(),
        ]);

        $this->call([
            EmployeeSeeder::class,
        ]);
    }
}
