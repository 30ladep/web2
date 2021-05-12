<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Carbon\Carbon;
use App\Product;
use Illuminate\Http\RedirectResponse;
class AdminController extends Controller
{
    //man hinh them san pham
    public function index($action = "index")
    {
        //$color = DB::table('color')->get();
        $typeProduct = DB::table('type_products')->get();
        $manu = DB::table('manufactures')->get();
        $products = DB::table('products')->orderby('id','desc')->get();
        return view('admin-pages.'.$action, array(
            // 'color' => $color,
            'typeProduct' => $typeProduct,
            'manu' => $manu,
            'products' => $products
        ));
    }

    public function ProductAction($action = "", $id = "")
    {
        //$color = DB::table('color')->get();
        $typeProduct = DB::table('type_products')->get();
        $manu = DB::table('manufactures')->get();
        
        //dd($products);
        if($action == "edit"){
            $product = DB::table('products')->where('id', $id)->first();
            $listImage = DB::table('image_products')->where('product_id', $id)->orderBy('id', 'asc')->get();
            //dd($listImage);
            // $str_json = json_encode($product); //arrary to string json
            // $arr_json = json_decode($str_json);// string to array
            return view('admin-pages.UploadProduct', array(
            //'color' => $color,
            'typeProduct' => $typeProduct,
            'manu' => $manu,
            'product' => $product,
            'listImage' => $listImage
        ));
        
        }
        if($action == "UploadImageProduct"){
            $product = DB::table('products')->where('id', $id)->first();
            $str_json = json_encode($product); //arrary to string json
            $arr_json = json_decode($str_json);// string to array
            return view('admin-pages.UploadImageProductTable', array(
            //'color' => $color,
            'typeProduct' => $typeProduct,
            'manu' => $manu,
            'product' => $product
            ));
        
         }
        return view('admin-pages.ListProduct');
    }



//    //ham them 4 hình san phẩm 
//    public function UploadProduct(Request $request)
//     {
//         //dd(public_path('\img\image_product'));
//         //dd($request->all());
//         if($request->hasFile('image'))
//         {
           

//             $imageName1 = time().'_'.$request->image_1->getClientOriginalName();
//             $imageName2 = time().'_'.$request->image_2->getClientOriginalName();
//             $imageName3 = time().'_'.$request->image_3->getClientOriginalName();
//             $imageName4 = time().'_'.$request->image_4->getClientOriginalName();
//             DB::table('image_products')->insert(
//                 ['prodcut' =>
//                 'image_product' =>$imageName1,
//                 'image_product' =>$imageName2,   
//                 'image_product' =>$imageName3,
//                 'image_product' =>$imageName4 
//                 ]
//             );

//             $request->imageName1->move(public_path('\img\image_product'), $imageName1);
//             $request->imageName2->move(public_path('\img\image_product'), $imageName2);
//             $request->imageName3->move(public_path('\img\image_product'), $imageName3);
//             $request->imageName4->move(public_path('\img\image_product'), $imageName4);
//         }
//         return redirect('/admin/ListProduct');
//     }





    //ham them moi san pham
    public function UploadImageProduct(Request $request)
    {
        if($request->hasFile('image'))
        {
           
            $imageName1 = time().'_'.$request->image_1->getClientOriginalName();
            $imageName2 = time().'_'.$request->image_2->getClientOriginalName();
            $imageName3 = time().'_'.$request->image_3->getClientOriginalName();
            $imageName4 = time().'_'.$request->image_4->getClientOriginalName();
            DB::table('image_products')->insert(
                ['prodcut_id' => $request->product_id,
                'image_product' =>$imageName1,
                'image_product' =>$imageName2,   
                'image_product' =>$imageName3,
                'image_product' =>$imageName4 
                ]
            );

            $request->imageName1->move(public_path('\img\image_product'), $imageName1);
            $request->imageName2->move(public_path('\img\image_product'), $imageName2);
            $request->imageName3->move(public_path('\img\image_product'), $imageName3);
            $request->imageName4->move(public_path('\img\image_product'), $imageName4);
        }
        return redirect('/admin/ListProduct');
    }



      //ham them moi san pham - TriS
      public function UploadProduct(Request $request)
      {
          //dd(public_path('\img\image_product'));
          //dd($request->all());
          //Khoi tao mang chua image name
          $imageName = [];
          if($request->hasFile('image'))
          {
              //dd(count($request->image));
              //dd($image->getClientOriginalName());
              for($i = 0; $i < count($request->image); $i++){
                  $imageName[$i] = (time() + $i).'_'.$request->image[$i]->getClientOriginalName();
              }
              //dd($imageName);
              $hot = false;
              if($request->hot == "on"){
                  $hot = true;
              }
              $check = DB::table('products')->insert(
                  ['product_name' => $request->productName,
                   'image' => $imageName[0],
                   'price' => $request->price,
                   'size' => $request->size,
                   'hot' => $hot,
                   'note' => $request->note,
                   'create_date' => Carbon::now()->format('Y-m-d'),
                   //'color' => $request->color,
                   'gender' => $request->gender,
                   'type_id' => $request->productType,
                   'manu_id' => $request->manuid,
                   'count' => $request->count
                   ]
              );
              $pd = DB::table('products')->orderBy('id', 'DESC')->first();
              //dd(DB::table('products')->orderBy('id', 'DESC')->first());
              //$request->image->move(public_path('\img\image_product'), $imageName);
              //insert image product
              if($check == true){
                    $index = 0;
                    foreach($request->image as $item){
                        DB::table('image_products')->insert(
                        ['product_id' => $pd->id,
                        'image' => $imageName[$index]
                        ]);
                        $item->move(public_path('\img\image_product'), $imageName[$index]);
                        $index++;
                    }
              }
              
          }
          return redirect('/admin/ListProduct');
      }

    //edit san pham
    public function EditProduct(Request $request)
    {
        //dd(public_path('\img\image_product'));
        //dd($request->all());
        $imageName = [];
        $hot = false;
        if($request->hot == "on"){
            $hot = true;
        }
        if($request->hasFile('image'))
        {
            for($i = 0; $i < count($request->image); $i++){
                  $imageName[$i] = (time() + $i).'_'.$request->image[$i]->getClientOriginalName();
            }
            $check = DB::table('products')->where('id',$request->id)->update(
                ['product_name' => $request->productName,
                 'image' => $imageName[0],
                 'price' => $request->price,
                 'size' => $request->size,
                 'hot' => $hot,
                 'note' => $request->note,
                 'create_date' => Carbon::now()->format('Y-m-d'),
                 //'color' => $request->color,
                 'gender' => $request->gender,
                 'type_id' => $request->productType,
                 'manu_id' => $request->manuid,
                 'count' => $request->count
                 ]
            );
            $pd = DB::table('products')->orderBy('id', 'DESC')->first();
            if($check == true){
                //xoa tat ca image product
                DB::table('image_products')->where('product_id', $pd->id)->delete();
                //them moi lai
                $index = 0;
                foreach($request->image as $item){
                    DB::table('image_products')->insert(
                    ['product_id' => $pd->id,
                    'image' => $imageName[$index]
                    ]);
                    $item->move(public_path('\img\image_product'), $imageName[$index]);
                    $index++;
                }
            }
        }
        else{
            DB::table('products')->where('id',$request->id)->update(
                ['product_name' => $request->productName,
                 'price' => $request->price,
                 'size' => $request->size,
                 'hot' => $hot,
                 'note' => $request->note,
                 'create_date' => Carbon::now()->format('Y-m-d'),
                 'color' => $request->color,
                 'gender' => $request->gender,
                 'type_id' => $request->productType,
                 'manu_id' => $request->manuid,
                 'count' => $request->count
                 ]
            );
        }
        return redirect('/admin/ListProduct');
    }

    //ham xoa san pham
    public function DeleteProduct($id){
        //dd($id);
        DB::table('products')->where('id', $id)->delete();
        DB::table('image_products')->where('product_id', $id)->delete();
        return redirect('/admin/ListProduct');
    }
}