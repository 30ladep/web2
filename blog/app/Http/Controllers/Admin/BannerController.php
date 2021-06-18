<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Banner;

use Illuminate\Validation\Rule;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $banners = Banner::all();
        return view('admin-pages.Banner.ListBanner',compact('banners'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin-pages.Banner.AddBanner');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $banner = New Banner();    
       


        if($request->hasFile('image_slide')){
            
            $request->validate(
            [
                'content' => ['string','regex:/^[a-zA-ZÑñ\s]+$/','min:2','max:255','unique:banners'],
                'image_slide' => ['required','image','mimes:jpg,png,jpeg,gif,svg','max:2048','dimensions:min_width=100,min_height=100,max_width=1000,max_height=1000'],
                'image_slide'=> 'unique:banners,image_slide',
            ],
            [
                'content.unique'=>'Nội dung đã tồn tại',  
                'content.regex'=>'Nội dung phải là chữ, không chứa số, kí tự',                              
                'content.min'=>'Nội dung phải lớn hơn 2 kí tự',
                'content.max'=>'Nội dung phải bé hơn 255 kí tự',   
                'image_slide.image'=>'Đây không phải định dạng hình, vui lòng chọn đúng định dạng',
                'image_slide.mimes'=>'Đây không phải định dạng hình, vui lòng chọn đúng định dạng',
                'image_slide.max'=>'Hình đã vượt quá kích thước qui định, vui lòng chọn lại ',
                // 'image_slide.unique'=>'Hình đã tồn tại, vui lòng chọn lại ',
              
            ]);
           
    
        }
        $banner->content = $request->content;
        $imageSlideName = time().'.'.$request->image_slide->getClientOriginalName();  
        $banner->image_slide= $imageSlideName;
   
        $request->image_slide->move(public_path('img/banner'), $imageSlideName);
        $banner->save();
        return redirect()->route('banners.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
     
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $banner = Banner::findOrFail($id);
        return view('admin-pages.Banner.EditBanner',compact('banner'));
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
       // dd($request->all());
        $banner = Banner::findOrFail($id);
        if($request->hasFile('image_slide')){
           
            $request->validate(
            [
                'content' => ['string','regex:/^[a-zA-ZÑñ\s]+$/','min:2','max:255', Rule::unique('banners')->ignore($banner->id)],
                'image_slide' => ['required','image','mimes:jpg,png,jpeg,gif,svg','max:2048','dimensions:min_width=100,min_height=100,max_width=1000,max_height=1000'],
            ],
            [
                'content.unique'=>'Nội dung đã tồn tại',  
                'content.regex'=>'Nội dung phải là chữ, không chứa số, kí tự',                              
                'content.min'=>'Nội dung phải lớn hơn 2 kí tự',
                'content.max'=>'Nội dung phải bé hơn 255 kí tự',   
                'image_slide.image'=>'Đây không phải định dạng hình, vui lòng chọn đúng định dạng',
                'image_slide.mimes'=>'Đây không phải định dạng hình, vui lòng chọn đúng định dạng',
                'image_slide.max'=>'Hình đã vượt quá kích thước qui định, vui lòng chọn lại ',
                // 'image_slide.exists'=>'Hình đã tồn tại, vui lòng chọn lại ',
                
            ]);
            $banner->content = $request->content;
            $imageSlideName = time().'.'.$request->image_slide->getClientOriginalName();  
            $banner->image_slide= $imageSlideName;
            $request->image_slide->move(public_path('\img\banner'), $imageSlideName);
        }
        else
        {
            $request->validate(
                [
                    'content' => ['string','regex:/^[a-zA-ZÑñ\s]+$/','min:2','max:255', Rule::unique('banners')->ignore($banner->id)],
                   
                ],
                [
                    'content.unique'=>'Nội dung đã tồn tại',  
                    'content.regex'=>'Nội dung phải là chữ, không chứa số, kí tự',                              
                    'content.min'=>'Nội dung phải lớn hơn 2 kí tự',
                    'content.max'=>'Nội dung phải bé hơn 255 kí tự',   
                   
                    
                ]);
            $banner->content = $request->content;           
        }
        $banner->save();
        return redirect()->route('banners.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $banner = Banner::findOrFail($id);
        $banner->delete();
        return redirect()->route('banners.index');
    }
}
