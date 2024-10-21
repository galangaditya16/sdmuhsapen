<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teachernew extends Model
{
    use HasFactory;
    protected $fillable = [
        'position_id',
        'name',
        'image',
        'no',
    ];
    protected $dates = ['deleted_at'];

    public function ticherposition(){
        return $this->belongsTo(TeacherPositionnew::class,'id','position_id');
    }
}
