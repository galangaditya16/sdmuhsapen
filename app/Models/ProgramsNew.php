<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProgramsNew extends Model
{
    use HasFactory;
    protected $fillable = ['id_category','author','views'];
    protected $table = 'programs';
    protected $dates = ['deleted_at'];
}
