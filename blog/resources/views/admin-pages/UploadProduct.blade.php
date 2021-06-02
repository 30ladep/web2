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
@if (!isset($product))
    <div class="ml-2">
        <h3>Thêm mới sản phẩm</h3>
        <form class="row" action="{{ url('/admin/UploadProduct') }}" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="col-5">
                <div class="form-group">
                <label>Product name:</label>
                <input type="text" name="productName" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Price: $</label>
                <input type="number" name="price" class="form-control" min="0" max="9999999" required>
            </div>
            <div class="form-group">
                <label>Product type:</label>
                <select class="form-control" name="productType" required>
                    @foreach ($typeProduct as $item)
                        <option value="{{$item->id}}">{{$item->type_name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label>Gender:</label>
                <select class="form-control" name="gender" required>
                    <option value="1">Men</option>
                    <option value="0">Women</option>
                </select>
            </div>
            <div class="form-group">
                <label>Manufacture:</label>
                <select class="form-control" name="manuid" required>
                    @foreach ($manu as $item)
                        <option value="{{$item->id}}">{{$item->manu_name}}</option>
                    @endforeach
                </select>
            </div>
            </div>
            <div class="col-5">
                <div class="form-group">
                <label>Size:</label>
                <input type="number" name="size" class="form-control" min="25" required>
            </div>
            <div class="form-group">
                <label>Hot:</label>
                <input name="hot" type="checkbox">
            </div>
            <div class="form-group">
                <label>Discription:</label>
                <input type="text" name="note" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Count:</label>
                <input type="number" class="form-control" name="count" min="0" max="500" required>
            </div>
            <div class="form-group">
                <label>Image product <i class="fas fa-exclamation-triangle" data-toggle="tooltip" title="Tối đa 5 ảnh: Ảnh ngoài cùng bên trái là ảnh chính"></i></label><br>
                <img class="img-show" src="" width="50px" alt="" srcset="">
                <img class="img-show" src="" width="50px" alt="" srcset="">
                <img class="img-show" src="" width="50px" alt="" srcset="">
                <img class="img-show" src="" width="50px" alt="" srcset="">
                <img class="img-show" src="" width="50px" alt="" srcset="">
                <input type="file" id="img-file" onchange="loadFile(event)" multiple name="image[]" accept="image/*" class="form-control-file" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
@else
    <div class="ml-2">
        <h3>Chỉnh sửa sản phẩm</h3>
        <form class="row" action="{{ url('/admin/EditProduct') }}" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
            <input type="number" name="id" value="{{$product->id}}" hidden>
            <div class="col-5">
                <div class="form-group">
                <label>Product name:</label>
                <input type="text" name="productName" class="form-control" value="{{$product->product_name}}" required>
            </div>
            <div class="form-group">
                <label>Price: $</label>
                <input type="number" name="price" class="form-control" min="0" max="9999999" value="{{$product->price}}" required>
            </div>
            <div class="form-group">
                <label>Product type:</label>
                <select class="form-control" name="productType" required>
                    @foreach ($typeProduct as $item)
                        <option value="{{$item->id}}" @php if($item->id == $product->type_id){echo "selected";} @endphp>{{$item->type_name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label>Gender:</label>
                <select class="form-control" name="gender" required>
                    @for ($i = 0; $i <= 1; $i++)
                        <option value="{{$i}}" @php if($i == $product->gender){echo "selected";} @endphp>
                            @if ($i == 0)
                                {{ "Women" }}
                            @else
                                {{ "Men" }}
                            @endif
                        </option>
                    @endfor
                </select>
            </div>
            <div class="form-group">
                <label>Manufacture:</label>
                <select class="form-control" name="manuid" required>
                    @foreach ($manu as $item)
                        <option value="{{$item->id}}" @php if($item->id == $product->manu_id){echo "selected";} @endphp>{{$item->manu_name}}</option>
                    @endforeach
                </select>
            </div>
            </div>
            <div class="col-5">
                <div class="form-group">
                <label>Size:</label>
                <input type="number" name="size" value="{{$product->size}}" class="form-control" min="25" required>
            </div>
            <div class="form-group">
                <label>Hot:</label>
                <input name="hot" type="checkbox" @php if($product->hot == 1){echo "checked";} @endphp>
            </div>
            <div class="form-group">
                <label>Discription:</label>
                <input type="text" name="note" value="{{$product->note}}" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Count:</label>
                <input type="number" class="form-control" name="count" min="0" max="500" value="{{$product->count}}" required>
            </div>
            <div class="form-group">
                <label>Image product <i class="fas fa-exclamation-triangle" data-toggle="tooltip" title="Tối đa 5 ảnh: Ảnh ngoài cùng bên trái là ảnh chính"></i></label><br>
                @php
                    $count = 5;
                @endphp
                @foreach ($listImage as $item)
                    @php
                        $count--;
                    @endphp
                    <img class="img-show" src="{{url('/img/image_product/'.$item->image_product)}}" width="50px" alt="" srcset="">
                @endforeach
                @for ($i = 0; $i < $count; $i++)
                    <img class="img-show" src="" width="50px" alt="" srcset="">
                @endfor
                <input type="file" id="img-file" onchange="loadFile(event)" multiple name="image[]" accept="image/*" class="form-control-file">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
@endif
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