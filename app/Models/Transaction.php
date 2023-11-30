<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Course;
use Illuminate\Support\Facades\Mail;
use App\Mail\CourseBought;
use Illuminate\Support\Facades\Auth;


class Transaction extends Model
{
    use HasFactory;

    protected $fillable = 
    [
        'amount',
        'payment_type',
        'course_id',
        'user_id',
    ];


    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function course()
    {
        return $this->belongsTo(Course::class);
    }

}
