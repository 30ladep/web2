<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Evalute extends Model
{
    protected $table='evalutes';
    protected $fillable=['id','rate','product_id','comment','user_id'];
    public $timestamps=false;

    //user
    public function User(){
        return $this->belongsTo('App\User','user_id','id');
    }

    //product 
    public function Product(){
        return $this->belongsTo('App\Product','product_id','id');
    }
}
