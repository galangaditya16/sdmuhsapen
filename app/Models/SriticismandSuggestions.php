<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class SriticismandSuggestions extends Model
{
    //
    use HasFactory,SoftDeletes;
    protected $fillable= ['ticket','title','name','email','phone','for','message'];
    protected $table = 'sriticismand_suggestions';
    protected $dates = ['deleted_at'];

}
