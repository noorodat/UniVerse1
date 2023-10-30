<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Course;
use App\Models\CourseMaterial;

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


    public function course() {
        return $this->belongsTo(Course::class);
    }

    public function courseMaterials() {
        return $this->hasMany(CourseMaterial::class, 'curriculum_id');
    }
}
