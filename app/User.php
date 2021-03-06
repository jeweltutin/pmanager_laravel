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
        'name', 'email','avatar','first_name','middle_name',
        'last_name','country','role_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
         'password','remember_token',
    ];

    public function companies(){
        return $this->hasMany('App\Company');
    }

    public function role(){
        return $this->belongsTo('App\Role');
    }

    public function tasks(){
        return $this->belongsToMany('app\Task');
    }

    //Many to many relationship 
    public function projects(){
        return $this->belongsToMany('app\Project');
    }

    public function comments(){
        return $this->morphMany('App\Comment', 'commentable');
    }

    public function socialProviders(){
        return $this->hasMany('App\SocialProvider');
    }
} 
