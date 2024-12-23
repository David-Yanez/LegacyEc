<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $fillable = [
        'title',
        'slug',
        'image',
        'shortdescription',
        'description',
        'ingredients',
        'benefits',
        'cost'
    ];
}
