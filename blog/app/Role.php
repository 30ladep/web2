<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{ 
    protected $table = 'roles';
    protected $fillable=['id','role_name'];
    public $timestamps =false;

    //user
    public function User(){
        return $this->hasMany('App\User','id');
    }
    
}
