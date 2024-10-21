<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeacherPositionnew extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'slug',
        'order',
        'image',
    ];
    protected $dates = ['deleted_at'];

    
}
