<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ContentNew extends Model
{
    use HasFactory,SoftDeletes;
    protected $fillable = ['id_category','author','views','images'];
    protected $table = 'content';
    protected $dates = ['deleted_at'];
    public function transLite()
    {
        return $this->hasMany(AllContentTranslite::class, 'id_content', 'id');
    }

    public function Categorys () {
        return $this->belongsTo(CategoryContent::class,'id_category','id');
    }

    public function getFirstImage()
    {
        $images = json_decode($this->images);
        return $images[0] ?? null;
    }

}
