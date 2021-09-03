<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class order_product extends Model
{
    protected $fillable = [
        'id', 'order_id', 'product_id'
    ];
}
