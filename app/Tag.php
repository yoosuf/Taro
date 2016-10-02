<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];


    /**
     * Get all of the discussions that are assigned this tag.
     */
    public function discussions()
    {
        return $this->morphedByMany(Discuss::class, 'taggable');
    }

    /**
     * Get all of the courses that are assigned this tag.
     */
    public function courses()
    {
        return $this->morphedByMany(Tag::class, 'taggable');
    }

}
