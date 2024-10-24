<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    protected $table = 'menus';
    protected $fillable = [
        'menu_name',
        'route',
        'parent_id',
        'icon',
        'order',
        'is_active',
    ];

    public function parent (){
        return $this->belongsTo(Menu::class,'parent_id');
    }

    public function children(){
        return $this->hasMany(Menu::class, 'parent_id')->orderBy('order','ASC');
    }
}
