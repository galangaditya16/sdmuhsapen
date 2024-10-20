<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $table    = 'category';
    // protected $primary
    protected $fillable = [
                            'category_id',
                            'parent_category_id',
                            'language',
                            'name',
                            'slug',
                            'date_added',
                            'date_updated',
                            'published',
                            'trashed',
                          ];


    public function parent(){
        return $this->belongsTo(Category::class,'parent_category_id','category_id');
    }
}
