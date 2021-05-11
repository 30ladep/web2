<?php

use Illuminate\Database\Seeder;
use App\Manufacture;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         //$this->call(UsersTableSeeder::class);
      $this->call(products_Seeder::class);
    // for($i=0;$i<= 20;$i++){
    //   $manu = new Manufacture();
    //   $manu->manu_name=Str::random(10); 

    //   $manu->save();
    //  }
    }
}
