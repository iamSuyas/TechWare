@extends('adminLayout')

@section('adminContent')
    <div class="container login-space">
        <div class="row d-flex justify-content-center">
            <div class="col-sm-5">
                <div class="fs-1 text-center mb-3 fw-bold">Edit Product</div>
                <form action="/product/{{ $product->id }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="name" class="form-label">Product Name:</label>
                        <input type="text" name="name" class="form-control" value="{{ $product->name }}">
                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label">Price:</label>
                        <input type="number" name="price" class="form-control no-spinners" value="{{ $product->price }}">
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Description:</label>
                        <textarea type="text" class="form-control" style="height: 150px" name="description">{{ $product->description }}</textarea>
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Category:</label>
                        <select name="category" class="form-control">
                            <option value="">--Please select--</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->name }}" @if ($product->category == $category->name) selected @endif>
                                    {{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Brand:</label>
                        <select name="brand" class="form-control">
                            <option value="">--Please select--</option>
                            @foreach ($brands as $brand)
                                <option value="{{ $brand->id }}" @if ($product->brand == $brand->name) selected @endif>
                                    {{ $brand->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <button type="submit" class="btn btn-dark w-100 py-2">Update</button>
                </form>
            </div>
        </div>
    </div>
@endsection
