<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetailBill extends Model
{
    protected $table='detail_bills';
    protected $fillable=['id','bill_id','product_id','count_product'];
    public $timestamps=false;
}
