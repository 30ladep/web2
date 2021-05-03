<?php

use Illuminate\Database\Seeder;

class products_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=0;$i<=5;$i++){
            $start    = new Datetime('1st Jan 2021');
            $end      = new Datetime('1st April 2021');

            $random   = new DateTime('@' . mt_rand($start->getTimestamp(), $end->getTimestamp()));
            DB::table('products')->insert([
                
                'product_name' => Str::random(10),     
                'image'=> "https://loremflickr.com/320/240",
                'price'=>rand(1,50),
                'type_id'=>rand(1,50),
                'manu_id'=>rand(1,50),
                'size'=>rand(1,50),
                'hot'=>rand(1,2),
                'note'=>Str::random(30),  
                'create_date'=>$random ,
                'color'=>Str::random(10),
                'gender'=>Str::random(5),    

            ]);
        }
    }
}
