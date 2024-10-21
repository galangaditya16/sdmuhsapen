<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    use HasFactory;

    protected $table = 'content';
    protected $fillable = [
        'content_id',
        'language',
        'category_id',
        'author',
        'title',
        'dlug',
        'text',
        'date_added',
        'date_updated',
        'published',
        'trashed',
        'view',
    ];
    const UPDATED_AT = 'data_updated';
    const CREATED_AT = 'data_added';

    public function category (){
        return $this->belongsTo(Category::class,'category_id','category_id');
    }
    public function imageHasContet(){
        return $this->belongsTo(ContentImage::class,'content_id');
    }

}
