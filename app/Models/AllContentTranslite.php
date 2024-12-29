<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AllContentTranslite extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'all_content_translites';
    protected $fillable = ['lang','id_news','id_program','id_content','title','slug','body'];
    protected $dates = ['deleted_at'];

    public function ContentPrograms(){
        return $this->hasOne(ProgramsNew::class,'id','id_programs');
    }

    public function ContentContent(){
        return $this->hasOne(ContentNew::class,'id','id_content');
    }

}
