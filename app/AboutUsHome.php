<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AboutUsHome extends Model
{
    protected $fillable = [
        'title', 'descriptiom', 'image_1', 'image_2', 'image_3', 'image_4', 'image_5',
    ];
}
