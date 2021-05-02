@extends('admin-layout.admin-layout')
@section('content')

<div class="ml-2">
    <h3>Add new product</h3>
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
            <label>Image product:</label>
            <input type="file" name="image" accept="image/*" class="form-control-file" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>

@endsection