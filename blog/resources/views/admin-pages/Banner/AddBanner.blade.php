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
                <img id="img-show" src="" width="300px" alt="" srcset="">       
                <input type="file" id="img-file" onchange="readURL(this);"  name="image_slide" accept="image/*" class="form-control-file" required>
                @error('image_slide')
                <div class="alert alert-danger">{{ $message  }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Thêm</button>
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