<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public $timestamps = false;

     /**
     * Get the thread that owns the comment.
     */
    public function thread()
    {
        return $this->belongsTo('App\Thread');
    }


    /**
     * The users that belong to the comment.
     */
    public function users()
    {
        return $this->hasOne('App\User');
    }

}
