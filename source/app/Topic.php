<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    /**
     * Get the threads for the topic.
     */
    public function threads()
    {
        return $this->hasMany('App\Thread');
    }
}
