<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AllCatgeoryTranslite extends Model
{
    use HasFactory;

    protected $filabble = ['id_category_news','id_category_programs','id_category_content','title','slug'];
    protected $table = 'all_catgeory_translites';
    protected $dates = ['deleted_at'];
}
