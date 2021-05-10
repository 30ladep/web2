@extends('admin-layout.admin-layout')
@section('content')


    <div class="ml-3">
        <h3>Update Image For Product</h3>
        <form class="row" action="{{ url('/admin/UploadImageProduct') }}" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
            <input type="number" name="id" value="{{$product->id}}" hidden>
            <input type="number" name="product_id" value="{{$product->id}}" hidden>
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
                <input type="number" class="form-control" name="count" min="0" value="{{$product->count}}" required>
            </div>

            <div class="form-group">
                <label>Image product:</label><br>
                <img id="img-show" src="{{url('/img/image_product/'.$product->image)}}" width="50px" alt="" srcset="">
                <input type="file" id="img-file" onchange="loadFile(event)" name="image" accept="image/*" class="form-control-file">
            </div>
            
            //

            <div class="form-group">
                <label>Image product:</label><br>
                <img id="img-show" src="https://png.pngtree.com/element_our/20190528/ourlarge/pngtree-black-and-white-prohibition-icon-image_1128425.jpg" width="50px" alt="" srcset="">
                <input type="file" id="img-file" onchange="loadFile(event)" name="image_1" accept="image/*" class="form-control-file" required>
            </div>
           

            <div class="form-group">
                <label>Image product:</label><br>
                <img id="img-show" src="https://png.pngtree.com/element_our/20190528/ourlarge/pngtree-black-and-white-prohibition-icon-image_1128425.jpg" width="50px" alt="" srcset="">
                <input type="file" id="img-file" onchange="loadFile(event)" name="image_2" accept="image/*" class="form-control-file" required>
            </div>
           

            <div class="form-group">
                <label>Image product:</label><br>
                <img id="img-show" src="https://png.pngtree.com/element_our/20190528/ourlarge/pngtree-black-and-white-prohibition-icon-image_1128425.jpg" width="50px" alt="" srcset="">
                <input type="file" id="img-file" onchange="loadFile(event)" name="image_3" accept="image/*" class="form-control-file" required>
            </div>
           

            <div class="form-group">
                <label>Image product:</label><br>
                <img id="img-show" src="https://png.pngtree.com/element_our/20190528/ourlarge/pngtree-black-and-white-prohibition-icon-image_1128425.jpg" width="50px" alt="" srcset="">
                <input type="file" id="img-file" onchange="loadFile(event)" name="image_4" accept="image/*" class="form-control-file" required>
            </div>
          
            
            

            <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>


<script>
var loadFile = function(event) {
	var image = document.getElementById('img-show');
	image.src = URL.createObjectURL(event.target.files[0]);
};
</script>

@endsection
