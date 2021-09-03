<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Category extends Model
{
    protected $fillable = [
        'id', 'name', 'descriptiom'
    ];

    public function posts()
    {
        return $this->belongsToMany('App\Blog', 'blogs_categories', 'category_id', 'blog_id');
    }
}
