<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    const UPDATED_AT = null ;

    protected $fillable = [
        'name', 'description',
    ];
}
