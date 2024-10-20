<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Content;

class ContentImage extends Model
{
    use HasFactory;

    protected $table = 'content_image';
    protected $fillable = [
        'content_image_id',
        'content_id',
        'path',
    ];

    public function content(){
        return $this->belongsTo(Content::class,'content_id');
    }
}
