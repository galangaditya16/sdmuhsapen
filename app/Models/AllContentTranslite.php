<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AllContentTranslite extends Model
{
    use HasFactory;
    protected $table = 'all_content_translites';
    protected $fillable = ['lang','id_news','id_program','id_content','title','slug','body'];
    protected $dates = ['deleted_at'];

}
