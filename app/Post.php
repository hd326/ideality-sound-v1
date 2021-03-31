<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $appends = [
        'commentCount'
    ];

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    // public function budget()
    // {
    //     return $this->hasOne(Category::class, 'parent_id', 'price');
    // }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable')->whereNull('parent_id');
    }

    public function commentCountRelation(){
        return $this->morphMany(Comment::class, 'commentable');
    }

    public function getCommentCountAttribute()
    {
        return $this->commentCountRelation()->count();
    }

    public function images()
    {
        return $this->hasMany(PostImage::class);
    }

    
    public function rate($rating, $user = null)
    {
        if ($rating < 1 || $rating > 5)
        {
            throw new InvalidArgumentException('Ratings must be between 1-5.');
        }

        $userId = $user ? $user->id : auth()->id();

        $this->ratings()->updateOrCreate(['user_id' => $userId, 'rating' => $rating]);
    }

    public function ratings()
    {
        return $this->hasMany(Rating::class);
    }

    public function rating()
    {
        return $this->ratings()->avg('rating');
    }
}
