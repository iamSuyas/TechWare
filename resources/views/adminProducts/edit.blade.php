
@extends('adminLayout')
  
@section('adminContent')
<div class="container login-space">
    <div class="row d-flex justify-content-center">
        <div class="col-sm-4 ">
        <form action="/product/{{$product->id}}" method="POST">
            @csrf
            @method('PUT')
  <div class="mb-3">
    <label for="name" class="form-label">Product Name:</label>
    <input type="text" name="name" class="form-control" value="{{$product->name}}">
  </div>
  <div class="mb-3">
    <label for="price" class="form-label">Price:</label>
    <input type="number" name="price" class="form-control no-spinners" id="exampleInputPassword1" value="{{$product->price}}">
  </div>
  <div class="mb-3">
    <label for="name" class="form-label">Description:</label>
    <input type="text" name="description"class="form-control" value="{{$product->description}}">
  </div>
  <div class="mb-3">
    <label for="name" class="form-label">Category:</label>
    <input type="text" name="category" class="form-control"value="{{$product->category}}">
  </div>
  <div class="mb-3">
    <label for="name" class="form-label">Brand:</label>
    <input type="text" name="brand"class="form-control" value="{{$product->brand}}">
  </div>
  <button type="submit" class="btn btn-dark w-100 py-2">Upload</button>
</form>
        </div>
    </div>
</div>
@endsection