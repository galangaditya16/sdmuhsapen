<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumni extends Model
{
    use HasFactory;

    protected $table = 'alumni';
    protected $fillable = [
        'alumni_id',
        'name',
        'picture',
        'address',
        'graduation_year',
        'phone',
        'email',
        'job',
        'office',
        'position',
        'office_address',
        'comment',
        'data_added',
        'data_updated',
        'published',
        'trashed',
    ];

    const UPDATED_AT = 'data_updated';
    const CREATED_AT = 'data_added';

}
