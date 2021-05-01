<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    // use Notifiable;
    protected $table='users';
    protected $fillable=['id','username','password','fullname','email','phone','create_date','login_cart','token_cart','type_user_id'];
    public $timestamps=false;

    //typeuser
    public function TypeUser(){
        return $this->belongsTo(App\TypeUser);
    }

    //bill 
    public function Bill(){
        return $this->hasMany('App\Bills');
    }

    //evaluate
    public function Evaluate(){
        return $this->hasMany(App\Evaluate);
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
    protected $hidden = 'password';

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    // protected $casts = [
    //     'email_verified_at' => 'datetime',
    // ];
}
