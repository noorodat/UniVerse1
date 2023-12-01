<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('departments')->insert([
            'title' => 'IT',
            'description' => 'Hello programmers',
            'number_of_courses' => 3,
            'image' => 'fa-solid fa-code',
        ]);
        DB::table('departments')->insert([
            'title' => 'Engineering',
            'description' => 'For you nerds',
            'number_of_courses' => 3,
            'image' => 'fa-solid fa-gear',
        ]);
        DB::table('departments')->insert([
            'title' => 'Science',
            'description' => 'Uni + Verse -> UniVerse',
            'number_of_courses' => 3,
            'image' => 'fa-solid fa-flask',
        ]);
    }
}
