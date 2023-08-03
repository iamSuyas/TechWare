@extends('adminLayout')

@section('adminContent')
    <div class="custom-product d-flex justify-content-center">
        <div class="col-sm-10">
            <div class="text-end w-75 fw-bold mt-3"><a href="/admin/createProductPage" class="btn btn-dark">Add</a></div>
            <h4 class="w-100 text-center fs-2 fw-bold mt-3">Product List </h4>
            <div class="trending-wrapper border-top">
                @foreach ($products as $product)
                    <div class=" row searched-order cart-list-divider">
                        <div class="col-sm-3 d-flex justify-content-center align-items-center bproduct-end">
                            <a href="detail/{{ $product->id }}">
                                <div class=""><img class="trending-image"
                                        src="{{ asset('storage/' . $product->gallery) }}"></div>
                            </a>
                        </div>
                        <div class="col-sm-4 w-75">
                            <div class="fw-medium">
                                <p class="fw-bold fs-3">Name : {{ $product->name }}</p>
                                <p>Price : NPR {{ $product->price }}</p>
                                <p>Description : {{ $product->description }}</p>
                                <p>Category : {{ $product->category }}</p>
                                <p>Brand: {{ $product->brand }}</p>
                            </div>
                            <div class="d-flex gap-2">
                                <div><a href="/product/{{ $product->id }}/edit" class="btn btn-outline-dark ">Edit</a>
                                </div>
                                <div><a href="/deleteProduct/{{ $product->id }}" class="btn btn-dark ">Remove</a></div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
