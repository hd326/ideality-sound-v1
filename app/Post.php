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

    public function user()
    {
        return $this->belongsTo(User::class);
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
}
