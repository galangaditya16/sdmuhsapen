<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PhotoAlbum extends Model
{
    use HasFactory;

    protected $table = 'photo_album';

    protected $fillable = [
        'photo_album_id',
        'parent_photo_album_id',
        'language',
        'name',
        'slug',
        'data_added',
        'published',
        'trashed',
    ];
    const UPDATED_AT = 'data_updated';
    const CREATED_AT = 'data_added';
}
