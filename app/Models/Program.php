<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_category',
        'title',
        'slug',
        'body',
        'images',
        'author',
        'published_at',
        'is_active',
    ];
    protected $dates = ['deleted_at'];

    public function hasCategory(){
        return $this->belongsTo(CatergoyProgram::class,'id','id_category');
    }
}
