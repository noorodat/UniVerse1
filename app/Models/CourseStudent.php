<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Course;
use App\Models\Instructor;

class CourseStudent extends Model
{
    use HasFactory;

    protected $table = 'courses_students'; // Specify the name of the pivot table

    protected $fillable = [
        'student_id',
        'course_id',
        'instructor_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    public function instructor()
    {
        return $this->belongsTo(Instructor::class, 'instructor_id');
    }
}
