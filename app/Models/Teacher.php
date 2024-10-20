<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;

    protected $table = 'teacher';
    protected $fillable = [
        'teacher_id',
        'name',
        'teacher_position_id',
        'birthdate',
        'phone',
        'education_history',
        'photo',
        'date_added',
        'date_updated',
        'published',
        'trashed',
    ];

    public function teacherPosition(){
        return $this->belongsTo(TeacherPosition::class,'teacher_position_id');
    }
}
