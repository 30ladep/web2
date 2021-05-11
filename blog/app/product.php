<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table='products';
    protected $fillable=['id','product_name','image','price','sold','size','hot','note','create_date','view','color','gender','type_id','manu_id','count'];
    public $timestamps=false;

    //detail bill
    public function DetailBill(){
        return $this->hasOne('App\DetailBill','product_id','id');
    }

    //evaluate
    public function Evaluate(){
        return $this->hasMany('App\Evaluate','product_id','id');
    }

    //type Product
    public function TypeProduct(){
        return $this->belongsTo('App\TypeProduct','type_id','id');
    }

    //manufactures
    public function Manufacture(){
        return $this->belongsTo('App\Manufacture','manu_id','id');
    }

    //product image
    public function ImageProduct(){
        return $this->hasMany('App\ImageProduct','product_id','id');
    }
    
}
