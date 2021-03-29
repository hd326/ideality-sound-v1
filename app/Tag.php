<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{

    protected $guarded = [];
    
    public function posts()
    {
        return $this->belongsToMany(Post::class);
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function setSlugAttribute($value)
    {
        $slug = str_slug($value);

        // if (static::whereSlug($slug)->exists()) {
        //     $slug = "{$slug}-" . $this->id; 
        // }
        $this->attributes['slug'] = $slug;
    }
}
