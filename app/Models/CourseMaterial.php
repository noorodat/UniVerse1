<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\CourseCurriculum;

class CourseMaterial extends Model
{
    use HasFactory;

    protected $fillable = [
        'video',
        'file',
        'video_name',
        'video_duration',
        'file_name',
        'course_id',
        'curriculum_id',
    ];
    

    public function course_curriculum() {
        return $this->belongsTo(CourseCurriculum::class);
    }

}
