<?php

use Illuminate\Database\Seeder;
use App\Manufacture;
class ManuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       
        for($i=0;$i<= 20;$i++){
             $manu = new Manufacture();
             $manu->manu_name=Str::random(10); 

        }
    }
}
