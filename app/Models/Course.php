<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Instructor;

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
    ];

    public function instructor()
    {
        return $this->belongsTo(Instructor::class);
    }
}

