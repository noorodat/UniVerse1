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
            'role' => 'instructor',
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
        DB::table('users')->insert([
            'name' => 'Lama Nazzal',
            'email' => 'lamanazzal@cit.just.edu.jo',
            'image' => 'images/defaultUserImage.png',
            'major' => 'Translation',
            'phone' => '0777777777',
            'role' => 'student',
            'password' => Hash::make('123456789Nn@'),
            'created_at' => Carbon::now(),
        ]);
        DB::table('users')->insert([
            'name' => 'Rama Ababneh',
            'email' => 'Ramaab@cit.just.edu.jo',
            'image' => 'images/defaultUserImage.png',
            'major' => 'Software engineering',
            'phone' => '0777777771',
            'role' => 'student',
            'password' => Hash::make('123456789Nn@'),
            'created_at' => Carbon::now(),
        ]);
        DB::table('users')->insert([
            'name' => 'Razan Rjoub',
            'email' => 'razanrj@cit.just.edu.jo',
            'image' => 'images/defaultUserImage.png',
            'major' => 'Software engineering',
            'phone' => '0777777772',
            'role' => 'student',
            'password' => Hash::make('123456789Nn@'),
            'created_at' => Carbon::now(),
        ]);
        DB::table('users')->insert([
            'name' => 'Qasem Alzoubi',
            'email' => 'qasemQZ@cit.just.edu.jo',
            'image' => 'images/defaultUserImage.png',
            'major' => 'Software engineering',
            'phone' => '0777777773',
            'role' => 'student',
            'password' => Hash::make('123456789Nn@'),
            'created_at' => Carbon::now(),
        ]);
        DB::table('users')->insert([
            'name' => 'Marah Abusaleh',
            'email' => 'marahabusaleh@cit.just.edu.jo',
            'image' => 'images/defaultUserImage.png',
            'major' => 'Computer engineering',
            'phone' => '0777777774',
            'role' => 'instructor',
            'password' => Hash::make('123456789Nn@'),
            'created_at' => Carbon::now(),
        ]);
        DB::table('users')->insert([
            'name' => 'Mohammad Houwari',
            'email' => 'mohhouwari@cit.just.edu.jo',
            'image' => 'images/defaultUserImage.png',
            'major' => 'Software engineering',
            'phone' => '0777777775',
            'role' => 'student',
            'password' => Hash::make('123456789Nn@'),
            'created_at' => Carbon::now(),
        ]);
        DB::table('users')->insert([
            'name' => 'Malek Sawalha',
            'email' => 'maleksaw@cit.just.edu.jo',
            'image' => 'images/defaultUserImage.png',
            'major' => 'Chemistry',
            'phone' => '0777777778',
            'role' => 'instructor',
            'password' => Hash::make('123456789Nn@'),
            'created_at' => Carbon::now(),
        ]);
        DB::table('users')->insert([
            'name' => 'Murad shorman',
            'email' => 'muradshor@cit.just.edu.jo',
            'image' => 'images/defaultUserImage.png',
            'major' => 'Software engineering',
            'phone' => '0771777776',
            'role' => 'student',
            'password' => Hash::make('123456789Nn@'),
            'created_at' => Carbon::now(),
        ]);
        DB::table('users')->insert([
            'name' => 'Ahmad Altamimi',
            'email' => 'ahmadtmtm@cit.just.edu.jo',
            'image' => 'images/defaultUserImage.png',
            'major' => 'Maths',
            'phone' => '0772777776',
            'role' => 'instructor',
            'password' => Hash::make('123456789Nn@'),
            'created_at' => Carbon::now(),
        ]);
        DB::table('users')->insert([
            'name' => 'Yaman Oudat',
            'email' => 'Yaman odat@cit.just.edu.jo',
            'image' => 'images/defaultUserImage.png',
            'major' => 'Medicine',
            'phone' => '0773777776',
            'role' => 'instructor',
            'password' => Hash::make('123456789Nn@'),
            'created_at' => Carbon::now(),
        ]);
        DB::table('users')->insert([
            'name' => 'Mjd Malkawi',
            'email' => 'mjdmalkawi@cit.just.edu.jo',
            'image' => 'images/defaultUserImage.png',
            'major' => 'Computer engineering',
            'phone' => '0774777776',
            'role' => 'instructor',
            'password' => Hash::make('123456789Nn@'),
            'created_at' => Carbon::now(),
        ]);
        DB::table('users')->insert([
            'name' => 'Alaa Abushawer',
            'email' => 'alaaabushawer@cit.just.edu.jo',
            'image' => 'images/defaultUserImage.png',
            'major' => 'Computer engineering',
            'phone' => '0775777776',
            'role' => 'student',
            'password' => Hash::make('123456789Nn@'),
            'created_at' => Carbon::now(),
        ]);
        DB::table('users')->insert([
            'name' => 'Yousuf Hafnawi',
            'email' => 'yousufhaf@cit.just.edu.jo',
            'image' => 'images/defaultUserImage.png',
            'major' => 'Computer engineering',
            'phone' => '0776777776',
            'role' => 'instructor',
            'password' => Hash::make('123456789Nn@'),
            'created_at' => Carbon::now(),
        ]);
    }
}
