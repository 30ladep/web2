<?php

use Illuminate\Database\Seeder;

class type_user_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=0;$i=5;$i++){
            DB::table('typeuser')->insert([
                'id' => rand(2,50),
                'Name' => Str::random(10),
                
            ]);
        }
    }
}
