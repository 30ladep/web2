<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $table='contacts';
    protected $fillable=['id','name','phone','email','address','note'];
    public $timestamps=false;
}
