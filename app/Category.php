<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function categories()
    {
        return $this->hasMany(Category::class, 'parent_id');
    }

    public function posts()
    {
        return $this->hasMany(Post::class, 'category_id');
    }
}
