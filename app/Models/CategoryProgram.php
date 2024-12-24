<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CategoryProgram extends Model
{
    use HasFactory,SoftDeletes;
    protected $table = 'category_programs';
    protected $fillable = [
        'slug',
        'title',
        'images',
    ];
    protected $dates = ['deleted_at'];

    public function transLite(){
        return $this->hasMany(AllCategoryTranslite::class,'id_category_programs','id');
    }
}
