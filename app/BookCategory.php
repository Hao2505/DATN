<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class book_category extends Model
{
    protected $fillable = [
        'id', 'name', 'descriptiom'
    ];
}
