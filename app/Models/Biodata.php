<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Biodata extends Model
{
    protected $table = 'biodata';
    protected $fillable = [
        'user_id', 'student_number', 'name', 'program', 'faculty', 'track'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
