@extends('admin-layout.admin-layout')
@section('content')
<style>
    body{
        position: relative;
    }
    img:hover{
        width: 300px !important;
        position: absolute;
        transition: width 1s;
    }
</style>

    <div class="ml-2">
        <h3>Chỉnh sửa Banner</h3>
        <form class="row" action="{{ route('banners.update',$banner->id) }}" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
            @method('PUT')
            <input type="number" name="id" value="{{$banner->id}}" hidden>
            <div class="col-5">
                <div class="form-group">
                <label>Content:</label>
                <input type="text" name="content" class="form-control" value="{{$banner->content}}" required>
            </div>
          
           
            
          
            <div class="form-group">
                <label>Image Slide </label><br>
       
                    {{-- <img class="img-show" src="{{url('/img/banner/'.$banner->image_slide)}}" width="300px" height="300px" alt="" srcset=""> --}}
                    <img  class="img-show" src="{{ public_path('\img\banner\\'.$banner->image_slide) }}" alt="" style="width: 300px; height: 300px">
                <input type="file" id="img-file" onchange="loadFile(event)"  name="image_slide" accept="image/*" class="form-control-file">
            </div>
            <button type="submit" class="btn btn-primary">Edit</button>
            </div>
        </form>
    </div>

<div style="margin-bottom: 100px"></div>
<script>
var loadFile = function(event) {
    var image = document.getElementsByClassName('img-show');
    for(var i = 0; i < 5; i++){
            image[i].src = "";
        }
    if(event.target.files.length <= 5){
        for(var i = 0; i < event.target.files.length; i++){
            image[i].src = URL.createObjectURL(event.target.files[i]);
        }
    }
    else{
      
        document.getElementById("img-file").value = "";
    }
	
};
</script>

@endsection