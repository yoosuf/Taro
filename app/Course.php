<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    public function lessons()
    {
    	return $this->hasMany(Lesson::class);
    }


    /**
     * Get all of the tags for the Courses.
     */
    public function tags()
    {
        return $this->morphToMany(Tag::class, 'taggable');
    }
}
