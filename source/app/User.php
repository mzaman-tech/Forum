<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
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
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    /**
     * Get the threads for the user.
     */
    public function threads()
    {
        return $this->hasMany('App\Thread');
    }


    /**
     * The comments that belong to the user.
     */
    public function comments()
    {
        return $this->belongsTo('App\Comment');
    }

}
