@extends('adminLayout')
  
@section('adminContent')
<div class="container login-space">
    <div class="row d-flex justify-content-center">
        <div class="col-sm-4 ">
        <form action="/admin/createProduct" method="POST" enctype="multipart/form-data">
          @csrf
  <div class="mb-3">
    <label for="name" class="form-label">Product Name:</label>
    <input type="text" name="name" class="form-control">
  </div>
  <div class="mb-3">
    <label for="price" class="form-label">Price:</label>
    <input type="number" name="price" class="form-control no-spinners" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="name" class="form-label">Description:</label>
    <input type="text" name="description"class="form-control">
  </div>
  <div class="mb-3">
    <label for="name" class="form-label">Image:</label>
    <input type="file" name="gallery" class="form-control" id="exampleFormControlInput1" placeholder="Enter Name">
  </div>
  <div class="mb-3">
    <label for="name" class="form-label">Category:</label>
    <input type="text" name="category" class="form-control">
  </div>
  <div class="mb-3">
    <label for="name" class="form-label">Brand:</label>
    <input type="text" name="brand"class="form-control">
  </div>
  <button type="submit" class="btn orange-button w-100 py-2">Upload</button>
</form>
        </div>
    </div>
</div>
@endsection