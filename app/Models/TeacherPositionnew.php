<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeacherPositionnew extends Model
{
    use HasFactory;
    protected $table = 'teacher_positionnews';
    protected $fillable = [
        'name',
        'slug',
        'order',
        'image',
    ];
    protected $dates = ['deleted_at'];


    public function transLite(){
        return $this->hasMany(AllCategoryTranslite::class,'id_teacher_position','id');
    }


}
