<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // IT Courses
        DB::table('courses')->insert([
            'title' => 'C++',
            'image' => 'images/cplspls.jpg',
            'preview_video' => 'uploads/videos/preview1.mp4',
            'description' => 'This is a C++ course',
            'duration' => 0,
            'number_of_lessons' => 0,
            'number_of_students' => 0,
            'price' => 10,
            'rating' => 0,
            'status' => 1,
            'instructor_id' => 1,
            'department_id' => 1,
            'created_at' => Carbon::now(),
        ]);
        DB::table('courses')->insert([
            'title' => 'Python',
            'image' => 'images/python.jpg',
            'preview_video' => 'uploads/videos/preview2.mp4',
            'description' => 'This is a Python course',
            'duration' => 0,
            'number_of_lessons' => 0,
            'number_of_students' => 0,
            'price' => 8,
            'rating' => 0,
            'status' => 1,
            'instructor_id' => 1,
            'department_id' => 1,
            'created_at' => Carbon::now(),
        ]);
        DB::table('courses')->insert([
            'title' => 'Data structures and Algorithms',
            'image' => 'images/DSA.png',
            'preview_video' => 'uploads/videos/preview3.mp4',
            'description' => 'This is a Data structures and Algorithms course',
            'duration' => 0,
            'number_of_lessons' => 0,
            'number_of_students' => 0,
            'price' => 15,
            'rating' => 0,
            'status' => 1,
            'instructor_id' => 1,
            'department_id' => 1,
            'created_at' => Carbon::now(),
        ]);
        // Science Courses
        DB::table('courses')->insert([
            'title' => 'Calculus 101',
            'image' => 'images/calc101.jpg',
            'preview_video' => 'uploads/videos/preview4.mp4',
            'description' => 'This is a Calculus 101 course',
            'duration' => 0,
            'number_of_lessons' => 0,
            'number_of_students' => 0,
            'price' => 10,
            'rating' => 0,
            'status' => 1,
            'instructor_id' => 4,
            'department_id' => 3,
            'created_at' => Carbon::now(),
        ]);
        DB::table('courses')->insert([
            'title' => 'Linear Algebra',
            'image' => 'images/linearAlgebra.jpg',
            'preview_video' => 'uploads/videos/preview5.mp4',
            'description' => 'This is a Linear Algebra course',
            'duration' => 0,
            'number_of_lessons' => 0,
            'number_of_students' => 0,
            'price' => 15,
            'rating' => 0,
            'status' => 1,
            'instructor_id' => 4,
            'department_id' => 3,
            'created_at' => Carbon::now(),
        ]);
        DB::table('courses')->insert([
            'title' => 'Organic Chemistry',
            'image' => 'images/organicChem.jpg',
            'preview_video' => 'uploads/videos/preview6.mp4',
            'description' => 'This is an Organic Chemistry course',
            'duration' => 0,
            'number_of_lessons' => 0,
            'number_of_students' => 0,
            'price' => 15,
            'rating' => 0,
            'status' => 1,
            'instructor_id' => 3,
            'department_id' => 3,
            'created_at' => Carbon::now(),
        ]);
        // Engineering courses
        DB::table('courses')->insert([
            'title' => 'Microprocessor',
            'image' => 'images/microProcessor.jpg',
            'preview_video' => 'uploads/videos/preview7.mp4',
            'description' => 'This is Microprocessor course',
            'duration' => 0,
            'number_of_lessons' => 0,
            'number_of_students' => 0,
            'price' => 14,
            'rating' => 0,
            'status' => 1,
            'instructor_id' => 2,
            'department_id' => 2,
            'created_at' => Carbon::now(),
        ]);
        DB::table('courses')->insert([
            'title' => 'Computer Architecture',
            'image' => 'images/computerArchitecture.jpg',
            'preview_video' => 'uploads/videos/preview8.mp4',
            'description' => 'This is an Computer Architecture course',
            'duration' => 0,
            'number_of_lessons' => 0,
            'number_of_students' => 0,
            'price' => 15,
            'rating' => 0,
            'status' => 1,
            'instructor_id' => 7,
            'department_id' => 2,
            'created_at' => Carbon::now(),
        ]);
    }
}
