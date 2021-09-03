<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class books extends Model
{
    protected $fillable = [
        'id', 'name', 'image', 'descriptiom', 'price', 'content', 'categories', 'qty'
    ];
}
