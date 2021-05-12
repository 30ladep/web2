<?php

use Illuminate\Database\Seeder;
use App\Product;

class products_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $color = array('white', 'green', 'red','yellow','green','blue','black',);
        $products =Product::all()->toArray();

        // foreach ($products as $value => $key) {
           
        //     $key['sold']= rand(1,50);
        //     $key['view']= rand(25,520);
        //     $key['color']=Str::random($color[0],$color[6]);
         

          
            
        // }
        $start = 2;
        $end = count($products);

        for ($i= $start ;$i <= $end ; $i++){
           
            DB::table('products')->update([
                
                'sold' => rand(1,50),
                'view'=> rand(25,520),
                'color'=>Str::random($color[0],$color[6])
            ]->where('id',$i));
        }
       
        // for($i=2;$i<= count($products);$i++){
        //     $products[i]->sold = rand(1,50);
        //     $products[i]->view = rand(5,50);
        //     $products[i]->color = rand($color[0],$color[6]);
        //     $products[i]->gender = rand(1,2);

        //     $products->save();
        // }
    }
}
