<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Arr;

class Gallery extends Model
{
    //
    use HasFactory,SoftDeletes;
    protected $table    = 'galleries';
    protected $fillable = ['title_id','title_en','slug_id','slug_en','path','images','headline','thumbnail'];
    protected $dates    = ['deleted_at'];
    protected $casts    = ['images' => 'array'];


    public function countGallery()
    {
        $imagesArray = is_array($this->images) ? $this->images : json_decode($this->images, true);
        return is_array($imagesArray) ? count($imagesArray) : 0;
    }
}
