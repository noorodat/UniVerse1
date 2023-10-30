<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("admins")->insert([
            [
                'name' => 'Nooraldeen Odat',
                'username' => 'Nooraldeen',
                'email' => 'nooraldeen@gmail.com',
                'password' => Hash::make('password'),
            ],
            [
                'name' => 'Omar Migdady',
                'username' => 'Omar',
                'email' => 'omar@gmail.com',
                'password' => Hash::make('password'),
            ]
        ]);
    }
}
