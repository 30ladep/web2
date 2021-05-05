<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
      //   $this->call(UsersTableSeeder::class);
    //  $this->call(products_Seeder::class);
    for($i=0;$i<=5;$i++){
    
      DB::table('manufactures')->insert([
                 
        'manu_name'=> Str::random(10)
      ]);
  } 
    }
}
