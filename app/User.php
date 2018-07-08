<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

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

    public function event() {
        return $this->hasMany('App\Project');
    }

    public function followers()
    {
        return $this->belongsToMany('User', 'user_relationships', 'follower_id', 'followee_id')->withTimestamps();
    }

    // Get all users we are following
    public function following()
    {
        return $this->belongsToMany('User', 'user_relationships', 'followee_id', 'follower_id')->withTimestamps();
    }

}
