<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseCurriculum extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'course_id',
        'duration',
        'number_of_videos',
        'number_of_files',
    ];
}
