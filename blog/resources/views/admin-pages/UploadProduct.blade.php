@extends('admin-layout.admin-layout')
@section('content')

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
                <input type="number" name="price" class="form-control" min="0" required>
            </div>
            <div class="form-group">
                <label>Product type:</label>
                <select class="form-control" name="productType" required>
                    @foreach ($typeProduct as $item)
                        <option value="{{$item->id}}">{{$item->name}}</option>
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
                        <option value="{{$item->id}}">{{$item->name}}</option>
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
                <label>Color:</label>
                <select class="form-control" name="color" required>
                    @foreach ($color as $col)
                        <option value="{{$col->id}}">{{$col->name}}</option>
                    @endforeach
                    
                </select>
            </div>
            <div class="form-group">
                <label>Image product:</label><br>
                <img id="img-show" src="https://png.pngtree.com/element_our/20190528/ourlarge/pngtree-black-and-white-prohibition-icon-image_1128425.jpg" width="50px" alt="" srcset="">
                <input type="file" id="img-file" onchange="loadFile(event)" name="image" accept="image/*" class="form-control-file" required>
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
                <input type="number" name="price" class="form-control" min="0" value="{{$product->price}}" required>
            </div>
            <div class="form-group">
                <label>Product type:</label>
                <select class="form-control" name="productType" required>
                    @foreach ($typeProduct as $item)
                        <option value="{{$item->id}}" @php if($item->id == $product->type_id){echo "selected";} @endphp>{{$item->name}}</option>
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
                        <option value="{{$item->id}}" @php if($item->id == $product->manu_id){echo "selected";} @endphp>{{$item->name}}</option>
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
                <label>Color:</label>
                <select class="form-control" name="color" required>
                    @foreach ($color as $col)
                        <option value="{{$col->id}}" @php if($product->color == $col->id){echo "selected";} @endphp>{{$col->name}}</option>
                    @endforeach
                    
                </select>
            </div>
            <div class="form-group">
                <label>Image product:</label><br>
                <img id="img-show" src="{{url('/img/image_product/'.$product->image)}}" width="50px" alt="" srcset="">
                <input type="file" id="img-file" onchange="loadFile(event)" name="image" accept="image/*" class="form-control-file">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
@endif

<script>
var loadFile = function(event) {
	var image = document.getElementById('img-show');
	image.src = URL.createObjectURL(event.target.files[0]);
};
</script>

@endsection