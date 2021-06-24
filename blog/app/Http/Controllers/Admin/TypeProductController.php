<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\TypeProduct;
use App\Product;
use Illuminate\Validation\Rule;
class TypeProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $typeProducts = TypeProduct::all();
        return view('admin-pages.TypeProduct.ListTypeProduct',compact('typeProducts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin-pages.TypeProduct.AddTypeProduct');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $typeProduct = new TypeProduct();
        $this->validate($request,[   
            'type_name'=>['string','regex:/^[a-zA-ZÑñ\s]+$/','min:2','max:255','unique:type_products'],   
        ]
        ,
        [ 
            'type_name.unique'=>'Loại sản phẩm đã tồn tại',  
            'type_name.regex'=>'Loại sản phẩm phải là chữ, không chứa số, kí tự',                              
            'type_name.min'=>'Loại sản phẩm phải lớn hơn 2 kí tự',
            'type_name.max'=>'Loại sản phẩm phải bé hơn 255 kí tự',                                      
        ]);
        $typeProduct->type_name = $request->type_name;
        $typeProduct->save();
        return redirect()->route('typeproducts.index');
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
        $typeProduct = TypeProduct::findOrFail($id);

        return view('admin-pages.TypeProduct.EditTypeProduct',compact('typeProduct'));
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
        $typeProduct = TypeProduct::findOrFail($id);
        

        if($request->input('type_name')){
            $this->validate($request,[   
                'type_name'=>['string','regex:/^[a-zA-ZÑñ\s]+$/','min:2','max:255', Rule::unique('type_products')->ignore($typeProduct->id)],   
            ]
            ,
            [         
                'type_name.unique'=>'Loại sản phẩm đã tồn tại',
                'type_name.regex'=>'Loại sản phẩm phải là chữ, không chứa số,kí tự',
                'type_name.string'=>'Loại sản phẩm phải là chữ',        
                'type_name.min'=>'Loại sản phẩm phải lớn hơn 2 kí tự',
                'type_name.max'=>'Loại sản phẩm phải bé hơn 255 kí tự',                                      
            ]);
            $typeProduct->type_name = $request->type_name;
            $typeProduct->save();
            return redirect()->route('typeproducts.index');
        }else{
            $typeProduct->save();
            return redirect()->route('typeproducts.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Product = Product::where('type_id', $id)->count();
        if($Product == 0){
            $typeProduct = TypeProduct::findOrFail($id);
            $typeProduct->delete();
            return redirect()->back();
        }
        else{
            echo "<script type='text/javascript'>
                alert('You can not delete this product type');
                window.location = '";
                    echo route('typeproducts.index');
            echo"'
            </script>";
            
        }
        
    }
}
