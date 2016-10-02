<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Discuss extends Model
{




    public function post()
    {
        return $this->belongsTo(Post::class);
    }


}
