<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class newsletter extends Model
{
    protected $fillable = [
        'id', 'name', 'phone', 'email'
    ];
}
