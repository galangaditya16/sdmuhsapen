<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teachernew extends Model
{
    use HasFactory;
    protected $table = 'teachernews';
    protected $fillable = [
        'position_id',
        'name',
        'image',
        'detail_id',
        'detail_en',
    ];
    protected $dates = ['deleted_at'];

    public function ticherposition(){
        return $this->belongsTo(TeacherPositionnew::class,'position_id','id');
    }
}
