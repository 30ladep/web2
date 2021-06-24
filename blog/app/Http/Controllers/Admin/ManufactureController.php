<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Manufacture;
use App\Product;
use Illuminate\Validation\Rule;

class ManufactureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $manu = Manufacture::all();
        return view('admin-pages.Manufactures.ListManufacture',compact('manu'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin-pages.Manufactures.AddManufacture');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $manu = new Manufacture(); 
        $this->validate($request,[   
            'manu_name'=>['string','regex:/^[a-zA-ZÑñ\s]+$/','min:2','max:255','unique:manufactures'],   
        ]
        ,
        [ 
            'manu_name.unique'=>'Nhà sản xuất đã tồn tại',  
            'manu_name.regex'=>'Nhà sản xuất phải là chữ, không chứa số, kí tự',                              
            'manu_name.min'=>'Nhà sản xuất phải lớn hơn 2 kí tự',
            'manu_name.max'=>'Nhà sản xuất phải bé hơn 255 kí tự',                                      
        ]);
        $manu->manu_name = $request->manu_name;
        $manu->save();
      return redirect()->route('manufacuters.index');
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
        $manu = Manufacture::findOrFail($id);
        return view('admin-pages.Manufactures.EditManufacture',compact('manu'));
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
        $manu = Manufacture::findOrFail($id);
        if($request->input('manu_name')){
            $this->validate($request,[   
                'manu_name'=>['string','regex:/^[a-zA-ZÑñ\s]+$/','min:2','max:255',
                Rule::unique('manufactures')->ignore($manu->id)],   
            ]
            ,
            [         
                'manu_name.unique'=>'Nhà sản xuất đã tồn tại',
                 'manu_name.regex'=>'Nhà sản xuất phải là chữ, không chứa số,kí tự',
                'manu_name.string'=>'Nhà sản xuất phải là chữ',        
                'manu_name.min'=>'Nhà sản xuất phải lớn hơn 2 kí tự',
                'manu_name.max'=>'Nhà sản xuất phải bé hơn 255 kí tự',                                      
            ]);
            $manu->manu_name =  $request->manu_name;
            $manu->save();
            return redirect()->route('manufacuters.index');
        }else{
        $manu->save();
        return redirect()->route('manufacuters.index');
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
        $Product = Product::where('manu_id', $id)->count();
        if($Product == 0){
            $manu = Manufacture::findOrFail($id);
            $manu->delete();
            return redirect()->back();
        }
        else{
            echo "<script type='text/javascript'>
                alert('You can not delete this Manufactures');
                window.location = '";
                    echo route('manufacuters.index');
            echo"'
            </script>";
        }
    }
}
