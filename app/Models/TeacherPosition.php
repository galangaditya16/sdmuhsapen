<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeacherPosition extends Model
{
    use HasFactory;

    protected $table = 'teacher_position';
    protected $fillable = [
        'teacher_position_id',
        'language',
        'name',
        'date_added',
        'date_updated',
        'published',
        'trashed',
    ];
    const UPDATED_AT = 'data_updated';
    const CREATED_AT = 'data_added';
    

    public function Hasteacher(){
        return $this->hasMany(Teacher::class,'teacher_position_id');
    }
}
