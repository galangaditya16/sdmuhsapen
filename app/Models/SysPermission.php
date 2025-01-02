<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\Permission\Models\Permission;

class SysPermission extends Permission
{
    //
    use HasFactory;
	protected $table = 'permissions';

	protected $primaryKey = 'id';

	protected $fillable = [
        'id', 'name', 'guard_name'
	];
}
