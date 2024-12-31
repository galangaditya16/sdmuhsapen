<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sail\Console\PublishCommand;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProgramsNew extends Model
{
    use HasFactory,SoftDeletes;
    protected $fillable = ['id_category','author','views','path','images'];
    protected $table = 'programs';
    protected $dates = ['deleted_at'];


    public function Categorys(){
        return $this->belongsTo(CategoryProgram::class,'id_category','id');
    }

    public function transLite(){
        return $this->hasMany(AllContentTranslite::class,'id_programs','id');
    }


}
