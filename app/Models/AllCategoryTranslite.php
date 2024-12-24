<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AllCategoryTranslite extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable = ['id_category_news','id_category_programs','id_category_content','title','slug','lang'];
    protected $table = 'all_category_translites';
    protected $dates = ['deleted_at'];

    public function CategoryContent(){
        return $this->hasOne(CategoryContent::class,'id','id_category_content');
    }

    public function CategoryNews(){
        return $this->hasOne(CategoryNews::class,'id','id_category_news');
    }

    public function CategoryPrograms(){
        return $this->hasOne(CategoryProgram::class,'id','id_category_programs');
    }
}


