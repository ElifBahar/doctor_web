<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeWorkingDays extends Model
{
    use HasFactory;


    protected $fillable = [
        'day',
        'start_time',
        'end_time',
        'is_open'
    ];
}
