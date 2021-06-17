@extends('admin-layout.admin-layout')
@section('content')
<style>
    body{
        position: relative;
    }
    img{
    max-width:180px;
    }
    input[type=file]{
    padding:10px;
    background:#2d2d2d;}
</style>

    <div class="ml-2">
        <h3>Chỉnh sửa Banner</h3>
        <form class="row" action="{{route('banners.update',$banner->id) }}" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
            @method('PUT')
            <input type="number" name="id" value="{{$banner->id}}" hidden>
            <div class="col-5">
                <div class="form-group">
                <label>Content:</label>
                <textarea name="content" id="content" cols="50" rows="10" >{{$banner->content}}</textarea>
                @error('content')
                <div class="alert alert-danger">{{ $message  }}</div>
                @enderror
            </div>          
          
            <div class="form-group">
                <label>Image Slide </label><br>
                <img  id="img-show" src="{{ url('\img\banner\\'.$banner->image_slide) }}" alt="" width="300px">
                <input type="file" id="img-file" onchange="readURL(this);"  name="image_slide" value="{{$banner->image_slide}}" accept="image/*" class="form-control-file" >
                @error('image_slide')
                <div class="alert alert-danger">{{ $message  }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Chỉnh sửa</button>
            </div>
        </form>
    </div>

<div style="margin-bottom: 100px"></div>
<script>
    function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#img-show')
                        .attr('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>

@endsection