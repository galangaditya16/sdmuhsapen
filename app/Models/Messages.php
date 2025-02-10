<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Messages extends Model
{
    //
    protected $table = 'messages';
    protected $fillable = ['name','email','phone','shown','message'];
    protected $dates = ['detele_at'];
    
}
