<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CategoryContent extends Model
{
    use HasFactory,SoftDeletes;
    protected $table = 'category_contents';
    protected $fillable = ['title','slug','order','link','images'];
    protected $dates = ['deleted_at'];

    public function transLite(){
        return $this->hasMany(AllCategoryTranslite::class,'id_category_content','id');
    }
}
