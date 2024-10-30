<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class NewsNew extends Model
{
    use HasFactory,SoftDeletes;

    protected $table = 'news';
    protected $fillable = ['id_news','id_category','author','views'];
    protected $dates = ['deleted_at'];
}
