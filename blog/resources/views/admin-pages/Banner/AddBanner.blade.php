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
        <h3>Thêm mới Banner</h3>
        <form class="row" action="{{ route('banners.store') }}" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="col-5">
                <div class="form-group">
                <label>Content:</label><br>
                <textarea name="content" id="content" cols="50" rows="10" required></textarea>
                {{-- <input type="text" name="content" class="form-control" required> --}}
                @error('content')
                <div class="alert alert-danger">{{ $message  }}</div>
                @enderror
            </div>
          
            <div class="form-group">
                <label>Image Slide</label><br>                 
                <input type="file" id="img-file" onchange="loadFile(event)" multiple name="image_slide" accept="image/*" class="form-control-file" required>
                @error('image_slide')
                <div class="alert alert-danger">{{ $message  }}</div>
                @enderror
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
        alert("Tối đa 1 ảnh chính và 4 ảnh phụ");
        document.getElementById("img-file").value = "";
    }
	
};
</script>

@endsection