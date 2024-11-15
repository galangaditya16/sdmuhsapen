<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryContent extends Model
{
    use HasFactory;
    protected $table = 'category_contents';
    protected $fillable = ['title','slug','order','link','images'];
    protected $dates = ['deleted_at'];

    public function translite(){
        return $this->belongsTo(AllCategoryTranslite::class,'id','id_category_content');
    }
}
