<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InstructorRequest extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('instructor_requests')->insert([
            'what_kind_of_courses' => 'I will be providing IT courses',
            'why_to_accept' => 'because i will help this website to grow',
            'user_id' => 3,
            'created_at' => Carbon::now(),
        ]);
        DB::table('instructor_requests')->insert([
            'what_kind_of_courses' => 'I will be providing IT courses',
            'why_to_accept' => 'because i will help this website to grow',
            'user_id' => 4,
            'created_at' => Carbon::now(),
        ]);
        DB::table('instructor_requests')->insert([
            'what_kind_of_courses' => 'I will be providing IT courses',
            'why_to_accept' => 'because i will help this website to grow',
            'user_id' => 5,
            'created_at' => Carbon::now(),
        ]);
        DB::table('instructor_requests')->insert([
            'what_kind_of_courses' => 'I will be providing IT courses',
            'why_to_accept' => 'because i will help this website to grow',
            'user_id' => 6,
            'created_at' => Carbon::now(),
        ]);
        DB::table('instructor_requests')->insert([
            'what_kind_of_courses' => 'I will be providing IT courses',
            'why_to_accept' => 'because i will help this website to grow',
            'user_id' => 7,
            'created_at' => Carbon::now(),
        ]);
        DB::table('instructor_requests')->insert([
            'what_kind_of_courses' => 'I will be providing IT courses',
            'why_to_accept' => 'because i will help this website to grow',
            'user_id' => 9,
            'created_at' => Carbon::now(),
        ]);
    }
}
