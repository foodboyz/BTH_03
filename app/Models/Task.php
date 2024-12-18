<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{   
    protected $table = 'tasks';

    // Các cột được phép sử dụng Mass Assignment
    protected $fillable = [
        'title',
        'description',
        'long_description',
        'completed',
    ];
}