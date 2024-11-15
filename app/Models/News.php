<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class News extends Model
{
    use HasFactory,Notifiable;

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
}
