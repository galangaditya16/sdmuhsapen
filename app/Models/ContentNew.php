<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContentNew extends Model
{
    use HasFactory;
    protected $fillable = ['id_category','author','views'];
    protected $table = 'content';
    protected $dates = ['deleted_at'];

}
