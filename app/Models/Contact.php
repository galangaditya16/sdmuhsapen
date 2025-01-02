<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Contact extends Model
{
    use HasFactory,SoftDeletes;

    protected $table = 'contacts';
    protected $fillable = ['name','slug','address','logo','working_hours','mail','google_loc','instagram','facebook','youtube','tiktok','radio'];
    protected $dates = ['deleted_at'];
}
