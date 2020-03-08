<?php


namespace App\Relationships;


use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    /**
     * Get all of the video's comments.
     */
    public function comments()
    {
        return $this->morphMany('App\Relationships\Comment', 'commentable');
    }

    /**
     * Get all of the tags for the post.
     */
    public function tags()
    {
        return $this->morphToMany('App\Relationships\Tag', 'taggable');
    }
}
