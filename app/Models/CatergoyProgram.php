<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CatergoyProgram extends Model
{
    use HasFactory;
    protected $table = 'category_programs';
    protected $fillable = [
        'slug',
        'title',
        'images',
    ];
    protected $dates = ['deleted_at'];

    public function translite(){
        return $this->belongsTo(AllCategoryTranslite::class,'id','id_category_programs');
    }
}
