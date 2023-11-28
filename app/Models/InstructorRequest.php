<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InstructorRequest extends Model
{
    use HasFactory;

    protected $fillable = 
    [
        'what_kind_of_courses',
        'why_to_accept',
        'user_id'
    ];

    public function user()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }


}
