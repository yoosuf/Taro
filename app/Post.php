<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{


    public function discussion()
    {
        return $this->belongsTo(Discuss::class);
    }
}
