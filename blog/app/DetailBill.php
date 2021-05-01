<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetailBill extends Model
{
    protected $table='detail_bills';
    protected $fillable=['id','bill_id','product_id','count_product'];
    public $timestamps=false;

    //bill
    public function Bill(){
        return $this->belongsTo(App\Bill);
    }

    //product 
    
    public function Product(){
        return $this->hasOne(App\Product);
    }
}
