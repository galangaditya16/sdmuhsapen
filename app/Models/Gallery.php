<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Gallery extends Model
{
    //
    use HasFactory,SoftDeletes;
    protected $table    = 'galleries';
    protected $fillable = ['title_id','title_en','slug_id','slug_en','path','images','headline','thumbnail'];
    protected $dates    = ['deleted_at'];
}
