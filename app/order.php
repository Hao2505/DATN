<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    protected $fillable = [
        'id', 'name', 'phone', 'ls_province', 'ls_district', 'ls_ward', 'address', 'note', 'status'
    ];
}
