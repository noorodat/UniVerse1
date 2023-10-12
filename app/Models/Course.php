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
        'image',
        'duration',
        'price',
        'status',
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
}

