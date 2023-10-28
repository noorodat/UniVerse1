<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Instructor;
use App\Models\Department;

class Course extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'image',
        'duration',
        'number_of_lessons',
        'number_of_students',
        'price',
        'status',
        'rating',
        'instructor_id',
        'department_id',
    ];


    public function instructor()
    {
        return $this->belongsTo(Instructor::class);
    }

    public function department()
    {
        return $this->belongsTo(Department::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class, 'courses_students', 'course_id', 'user_id');
    }
}
