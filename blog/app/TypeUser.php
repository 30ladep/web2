<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TypeUser extends Model
{
    protected $table='type_users';
    protected $fillable=['id','name'];
    public $timestamps=false;

    //user
    public function User(){
        return $this->hasMany(App\User);
    }
}
