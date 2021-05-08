<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Manufacture extends Model
{
    protected $table='manufactures';
    protected $fillable=['id','manu_name'];
    public $timestamps=false;
    
    //type product
    public function TypeProduct(){
        return $this->hasMany('App\TypeProduct','manu_id','id');
    }
    //product 
    public function Product(){
        return $this->hasMany('App\Product','product_id','id');
    }
}
