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
            <input type="number" name="id" value="{{$banner->id}}" hidden>
            <div class="col-5">
                <div class="form-group">
                <label>Content:</label>
                <input type="text" name="productName" class="form-control" value="{{$banner->content}}" required>
            </div>
          
           
            
          
            <div class="form-group">
                <label>Image Slide <i class="fas fa-exclamation-triangle" data-toggle="tooltip"></i></label><br>
       
                    <img class="img-show" src="{{url('/img/image_product/'.$banner->image_slide)}}" width="50px" alt="" srcset="">
              
                <input type="file" id="img-file" onchange="loadFile(event)" multiple name="image[]" accept="image/*" class="form-control-file">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
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