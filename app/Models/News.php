<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_category',
        'title',
        'slug',
        'images',
        'body',
        'author',
        'published_at',
        'is_active',
    ];
    protected $dates = ['deleted_at'];

    public function hasCategory(){
        return $this->belongsTo(CatergoryNews::class,'id','id_category');
    }
}
