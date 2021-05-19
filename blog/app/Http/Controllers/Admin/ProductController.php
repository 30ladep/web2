<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use App\Product;
use App\TypeProduct;
use App\Manufacture;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($action = "index")
    {
        // $typeProducts = TypeProduct::all();
        // $manufactures = Manufacture::all();

        $typeProduct = DB::table('type_products')->get();
        $manu = DB::table('manufactures')->get();
        $products = DB::table('products')->orderby('id','desc')->get();
        return view('admin-pages.ListProduct', array(
            //'color' => $color,
            'typeProduct' => $typeProduct,
            'manu' => $manu,
            'products' => $products
        ));
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $products = new Product();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
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

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('products')->where('id', $id)->delete();
        DB::table('image_products')->where('product_id', $id)->delete();
        return redirect('/admin/ListProduct');
    }
}
