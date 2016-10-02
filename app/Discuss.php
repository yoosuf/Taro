<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Discuss extends Model
{

    public function posts()
    {
        return $this->hasMany(Post::class);
    }



    /**
     * Get all of the tags for the Discussion.
     */
    public function tags()
    {
        return $this->morphToMany(Tag::class, 'taggable');
    }
}
