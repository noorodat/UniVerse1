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
                'name' => 'Nooraldeen Aloudat',
                'username' => 'Nooraldeen',
                'email' => 'noor.feraas@gmail.com',
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
