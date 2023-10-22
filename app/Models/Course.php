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
        'price',
        'status',
        'instructor_id',
        'department_id',
    ];

    public $DEFAULT_COURSE_DURATION = 0;
    public $DEFAULT_NUMBER_OF_LESSONS = 0;
    private $DEFAULT_COURSE_PRICE = 1;
    private $DEFAULT_COURSE_STATUS = 1;

    public function getDefaultPrice() {
        return $this->DEFAULT_COURSE_PRICE;
    }

    public function getDefaultStatus() {
        return $this->DEFAULT_COURSE_STATUS;
    }


    public function instructor()
    {
        return $this->belongsTo(Instructor::class);
    }

    public function department()
    {
        return $this->belongsTo(Department::class);
    }
}

