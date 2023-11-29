<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'Nooraldeen Aloudat',
            'email' => 'nfaloudat20@cit.just.edu.jo',
            'image' => 'images/defaultUserImage.png',
            'major' => 'Computer science',
            'phone' => '0776795866',
            'role' => 'student',
            'password' => Hash::make('123456789Nn@'),
            'created_at' => Carbon::now(),
        ]);
        DB::table('users')->insert([
            'name' => 'Omar migdady',
            'email' => 'omar@cit.just.edu.jo',
            'image' => 'images/defaultUserImage.png',
            'major' => 'Computer science',
            'phone' => '0776795111',
            'role' => 'student',
            'password' => Hash::make('123456789Nn@'),
            'created_at' => Carbon::now(),
        ]);
        DB::table('users')->insert([
            'name' => 'Bashar Oudat',
            'email' => 'bashar@cit.just.edu.jo',
            'image' => 'images/defaultUserImage.png',
            'major' => 'Translation',
            'phone' => '0776795869',
            'role' => 'student',
            'password' => Hash::make('123456789Nn@'),
            'created_at' => Carbon::now(),
        ]);
    }
}
