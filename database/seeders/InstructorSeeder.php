<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;


class InstructorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('instructors')->insert([
            'courses_number' => 0,
            'rating' => 0,
            'earnings' => 0,
            'restricted' => 0,
            'user_id' => 2,
            'created_at' => Carbon::now(),
        ]);
        DB::table('instructors')->insert([
            'courses_number' => 0,
            'rating' => 0,
            'earnings' => 0,
            'restricted' => 0,
            'user_id' => 8,
            'created_at' => Carbon::now(),
        ]);
        DB::table('instructors')->insert([
            'courses_number' => 0,
            'rating' => 0,
            'earnings' => 0,
            'restricted' => 0,
            'user_id' => 10,
            'created_at' => Carbon::now(),
        ]);
        DB::table('instructors')->insert([
            'courses_number' => 0,
            'rating' => 0,
            'earnings' => 0,
            'restricted' => 0,
            'user_id' => 12,
            'created_at' => Carbon::now(),
        ]);
        DB::table('instructors')->insert([
            'courses_number' => 0,
            'rating' => 0,
            'earnings' => 0,
            'restricted' => 0,
            'user_id' => 13,
            'created_at' => Carbon::now(),
        ]);
        DB::table('instructors')->insert([
            'courses_number' => 0,
            'rating' => 0,
            'earnings' => 0,
            'restricted' => 0,
            'user_id' => 14,
            'created_at' => Carbon::now(),
        ]);
        DB::table('instructors')->insert([
            'courses_number' => 0,
            'rating' => 0,
            'earnings' => 0,
            'restricted' => 0,
            'user_id' => 16,
            'created_at' => Carbon::now(),
        ]);
    }
}
