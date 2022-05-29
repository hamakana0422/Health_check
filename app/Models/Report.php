<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    protected $fillable = [
        'user_id',
        'student_name',
        'condition',
        'meal',
        'sleep',
        'temperature',
    ];

    protected $guarded = [
        'id',
        'created_at',
        'updated_at',
    ];
}
