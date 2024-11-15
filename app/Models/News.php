<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;

class News extends Model
{
    use HasFactory,Notifiable,SoftDeletes;

    protected $fillable = [
        'id_category',
        'author',
        'views',
        'path',
        'image'
    ];
    protected $dates = ['deleted_at'];

    public function hasCategory(){
        return $this->belongsTo(CategoryNews::class,'id_category','id');
    }
    public function content(){
        return $this->hasMany(AllContentTranslite::class,'id_news','id');
    }
    public function translite($lang){
        return $this->translations()->where('lang', $lang)->first();
    }

    public function getCreatedAtFormated()
    {
        return $this->created_at->format('F d, Y');
    }

    public function getFirstImage()
    {
        $images = json_decode($this->image);        
        return $images[0];
    }
}
