@extends('master')
@section('content')
    <div class="container custom-product d-flex justify-content-around mt-3">

        <div class="w-100 d-flex gap-3">
            <div class="detail-img-container d-flex justify-content-center">
                <img class="detail-img" src="{{ asset('storage/' . $product->gallery) }}" alt="">
            </div>
            <div class="col-sm-6 d-flex flex-column justify-content-center px-3 border-start">
                <p class="fs-1 mb-0 fw-medium">{{ $product['name'] }}</p>
                <div class="d-flex gap-1 ">
                    <p class="fs-6 mb-0 fw-light text-decoration-underline">{{ $product['brand'] }}</p>
                    <p class="fs-6 mb-0 fw-light"> | {{ $product['category'] }}</p>
                </div>
                <p class="fs-6 my-1">NPR {{ $product['price'] }}</p>
                <div class="d-flex gap-3 mt-1">
                    <form action="/add_to_cart" method="POST">
                        @csrf
                        <input type="hidden" name="product_id" value="{{ $product['id'] }}">
                        <button class="btn btn-dark ">
                            Add to cart
                        </button>
                    </form>
                    <form action="/buyimmediate" method="POST">
                        @csrf
                        <input type="hidden" name="product_id" value="{{ $product['id'] }}">
                        <button class="btn btn-outline-dark  ">
                            Buy it now
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="detail-description ">
        <p class="fs-6 mb-0">Details:</p>
        <p class="fs-6 mb-0">{{ $product['description'] }}</p>
    </div>





    <div class="trending-wrapper px-5">
        <div class="w-100 d-flex justify-content-between align-items-center ">
            <p class="fs-1 fw-medium">Similar Products</p>
            <p class="fs-6 fw-light"><a href="/allProducts"
                    class="link-dark link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover ">All
                    Products>></a></p>
        </div>
        <div class="d-flex gap-5">
            @foreach ($allproducts as $eachproduct)
                <div class="trending-items d-flex justify-content-center">
                    <a href="detail/{{ $eachproduct['id'] }}">
                        <img class="trending-image" src="{{ asset('storage/' . $eachproduct->gallery) }}">
                        <div class="text-dark text-center mt-2 px-2 position-absolute">
                            <p class="m-0 text-start fs-5">{{ $eachproduct['name'] }}</p>
                            <p class="m-0 text-start fs-6">Rs. {{ $eachproduct['price'] }}</p>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
@endsection
