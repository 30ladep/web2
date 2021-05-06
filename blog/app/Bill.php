<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    protected $table='bills';
    protected $fillable=['id','price','create_date','status','image_check_out'];
    public $timestamps=false;

    //user
    public function User(){
        return $this->hasMany('App\User','user_id','id');
    }

    //detail bill
    public function DetailBill(){
        return $this->hasMany('App\DetailBill');
    }
}

