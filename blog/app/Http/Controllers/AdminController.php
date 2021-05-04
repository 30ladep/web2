<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Carbon\Carbon;
use Illuminate\Http\RedirectResponse;
class AdminController extends Controller
{
    //man hinh them san pham
    public function index($action = "index")
    {
        $color = DB::table('color')->get();
        $typeProduct = DB::table('type_product')->get();
        $manu = DB::table('manu')->get();
        $products = DB::table('products')->orderby('id','desc')->get();
        return view('admin-pages.'.$action, array(
            'color' => $color,
            'typeProduct' => $typeProduct,
            'manu' => $manu,
            'products' => $products
        ));
    }

    public function ProductAction($action = "", $id = "")
    {
        $color = DB::table('color')->get();
        $typeProduct = DB::table('type_product')->get();
        $manu = DB::table('manu')->get();
        
        //dd($products);
        if($action == "edit"){
            $product = DB::table('products')->where('id', $id)->first();
            $str_json = json_encode($product); //arrary to string json
            $arr_json = json_decode($str_json);// string to array
            return view('admin-pages.UploadProduct', array(
            'color' => $color,
            'typeProduct' => $typeProduct,
            'manu' => $manu,
            'product' => $product
        ));
        }
        return view('admin-pages.ListProduct');
    }

    //ham them moi san pham
    public function UploadProduct(Request $request)
    {
        //dd(public_path('\img\image_product'));
        //dd($request->all());
        if($request->hasFile('image'))
        {
            $imageName = time().'_'.$request->image->getClientOriginalName();
            $hot = false;
            if($request->hot == "on"){
                $hot = true;
            }
            DB::table('products')->insert(
                ['product_name' => $request->productName,
                 'image' => $imageName,
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
            $request->image->move(public_path('\img\image_product'), $imageName);
        }
        return redirect('/admin/ListProduct');
    }

    //edit san pham
    public function EditProduct(Request $request)
    {
        //dd(public_path('\img\image_product'));
        //dd($request->all());
        $hot = false;
        if($request->hot == "on"){
            $hot = true;
        }
        if($request->hasFile('image'))
        {
            $imageName = time().'_'.$request->image->getClientOriginalName();
            DB::table('products')->where('id',$request->id)->update(
                ['product_name' => $request->productName,
                 'image' => $imageName,
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
            $request->image->move(public_path('\img\image_product'), $imageName);
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
        return redirect('/admin/ListProduct');
    }
}