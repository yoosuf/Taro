<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{


    public function discussions()
    {
        return $this->hasMany(Discuss::class);
    }


    /**
     * Get all of the tags for the Discussion.
     */
    public function tags()
    {
        return $this->morphToMany(Tag::class, 'taggable');
    }


}
