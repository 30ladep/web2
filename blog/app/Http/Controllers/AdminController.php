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
        $products = DB::table('products')->get();
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
                 'manu_id' => $request->manuid
                 ]
            );
            $request->image->move(public_path('\img\image_product'), $imageName);
        }
        return view('admin-pages.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        //
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
        //
    }
}
