<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{

    public $timestamps = false;
    use HasFactory;

    protected $fillable = [
        'image',
        'title',
        'description',
        'number_of_courses'
    ];
}
