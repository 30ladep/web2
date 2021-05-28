<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable implements MustVerifyEmail
{
     use Notifiable;
    protected $table='users';
    protected $fillable=['id','username','password','email','phone','token_cart','remmember_token','role_id','type_user_id','email_verified_at'];
    public $timestamps=false;

    //type user
    public function TypeUser(){
        return $this->belongsTo('App\TypeUser','type_user_id','id');
    }

    //bill 
    public function Bill(){
        return $this->hasMany('App\Bills','user_id','id');
    }

    //evaluate
    public function Evaluate(){
        return $this->hasMany('App\Evaluate','user_id','id');
    }
    //role 
    public function Role(){
        return $this->belongsTo('App\Role');
    }
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    // protected $fillable = [
    //     'name', 'email', 'password',
    // ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
