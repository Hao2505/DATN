<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Blog extends Model
{
    protected $fillable = [
        'id', 'name', 'descriptiom', 'content'
    ];

    public function categories()
    {
        return $this->belongsToMany(
            'App\Category',
            'blogs_categories',
            'blog_id',
            'category_id'
        );
    }
}
