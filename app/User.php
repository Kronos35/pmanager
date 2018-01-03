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
        'name', 
        'email', 
        'password',
        'first_name',
        'middle_name',
        'city',
        'role_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    //Every user has many roles
    public function tasks(){
        return $this->hasMany('App\Models\Task');
    }
    //Every user has many comments
    public function comments(){
        return $this->hasMany('App\Models\Comment');
    }
    //Every user has many roles
    public function roles(){
        return $this->belongsTo('App\Models\Role');
    }
    //Every user has many companies
    public function companies(){
        return $this->hasMany('App\Models\Company');
    }
}
