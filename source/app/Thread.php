<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Thread extends Model
{
    public $timestamps = false;

    /**
     * Get the comments for the thread.
     */
    public function comments()
    {
        return $this->hasMany('App\Comment');
    }


    /**
     * Get the topic that owns the thread.
     */
    public function topic()
    {
        return $this->belongsTo('App\Topic');
    }

    /**
     * Get the topic that owns the thread.
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
