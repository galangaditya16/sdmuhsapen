<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContentNew extends Model
{
    use HasFactory;
    protected $fillable = ['id_category','author','views','images'];
    protected $table = 'content';
    protected $dates = ['deleted_at'];
    public function transLite()
    {
        return $this->belongsTo(AllCategoryTranslite::class, 'id_category_content', 'id');
    }

    public function Categorys () {
        return $this->belongsTo(CategoryContent::class,'id_category','id');
    }

}
