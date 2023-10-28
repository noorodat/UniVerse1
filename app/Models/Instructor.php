<?php

namespace App\Models;

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Course;
use App\Models\CourseStudent;

class Instructor extends User
{
    use HasFactory;

    protected $fillable = [
        'courses_number',
        'user_id',
        'restricted',
        'rating',
        'earnings',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function courses()
    {
        return $this->hasMany(Course::class, 'instructor_id');
    }

    public function courseStudents()
    {
        return $this->hasManyThrough(CourseStudent::class, Course::class, 'instructor_id', 'course_id', 'id', 'id');
    }
    
}

