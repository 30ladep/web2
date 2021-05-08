<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetailBill extends Model
{
    protected $table='detail_bills';
    protected $fillable=['id','bill_id','product_id','count_product','count_price'];
    public $timestamps=false;

    //bill
    public function Bill(){
        return $this->belongsTo('App\Bill','bill_id','id');
    }

    //product 
    
    public function Product(){
        return $this->hasOne('App\Product','product_id','id');
    }
}
