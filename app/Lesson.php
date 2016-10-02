<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];


    public function course()
    {
        return $this->belongsTo(Course::class);
    }


    public function reviews()
    {
        return $this->hasMany(Review::class);
    }
}
