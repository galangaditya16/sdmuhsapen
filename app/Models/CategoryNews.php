<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CategoryNews extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'category_news';

    protected $fillable = [
        'slug',
        'title',
        'images',
    ];
    protected $dates = ['deleted_at'];

    public function transLite(){
        return $this->hasMany(AllCategoryTranslite::class,'id_category_news','id');
    }
}
