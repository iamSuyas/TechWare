@extends('adminLayout')

@section('adminContent')
    

    <div class="container login-space">
        <div class="row d-flex justify-content-center">
            <div class="fs-1 text-center mb-3 fw-bold">Create Product</div>
            <div class="col-md-5 ">
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
                        <textarea class="form-control" style="height: 150px" name="description">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Alias, tempora a illo incidunt deserunt fugiat laborum eveniet. Magni quo asperiores velit deserunt iste vitae, rem voluptatum quam nulla mollitia in. Lorem ipsum dolor sit amet consectetur adipisicing elit libero
                        </textarea>
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Image:</label>
                        <input type="file" name="gallery" class="form-control" id="exampleFormControlInput1"
                            placeholder="Enter Name">
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Category:</label>
                        <select name="category" class="form-control">
                            <option value="">--Please select--</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->name }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Brand:</label>
                        <select name="brand" class="form-control">
                            <option value="">--Please select--</option>

                            @foreach ($brands as $brand)
                                <option value="{{ $brand->name }}">{{ $brand->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <button type="submit" class="btn btn-dark  w-100 py-2">Upload</button>
                </form>
            </div>
        </div>
    </div>
@endsection
