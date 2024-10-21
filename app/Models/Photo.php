<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    use HasFactory;
    protected $table = 'photo';
    protected $fillable = [
                        'photo_id',
                        'language',
                        'photo_album_id',
                        'title',
                        'slug',
                        'description',
                        'data_added',
                        'data_updated',
                        'published',
                        'trashed',
    ];

    const UPDATED_AT = 'data_updated';
    const CREATED_AT = 'data_added';

    // public function photo(){
    //     return $this->belongsTo(Photo::class,'photo_id','')
    // }
}
