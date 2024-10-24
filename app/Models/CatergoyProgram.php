<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CatergoyProgram extends Model
{
    use HasFactory;

    protected $fillable = [
        'slug',
        'title',
        'images',
    ];
    protected $dates = ['deleted_at'];
}