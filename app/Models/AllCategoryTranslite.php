<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AllCategoryTranslite extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable = ['id_category_news','id_category_programs','id_category_content','title','slug'];
    protected $table = 'all_catgeory_translites';
    protected $dates = ['deleted_at'];
}
