@extends('master')
@section('content')
<div class="container custom-product d-flex justify-content-around mt-3">
        
        <div class="w-100 d-flex gap-3">
            <div class="col-sm-6 d-flex justify-content-center">
                <img class="detail-img" src="{{asset('storage/'. $product->gallery)}}" alt="">
            </div>
            <div class="col-sm-6 d-flex flex-column justify-content-center px-3 border-start">
                <p class="fs-1 mb-0 fw-medium">{{$product['name']}}</p>
                <p class="fs-6 text-decoration-underline mb-0">Details: {{$product['description']}}</p>
                <p class="fs-5 mb-0">${{$product['price']}}</p>
                <div class="d-flex gap-3">
                    <form action="/add_to_cart" method="POST">
                        @csrf
                        <input type="hidden" name="product_id" value="{{$product['id']}}">
                        <button class="btn normal-button">
                            Add to cart
                        </button>
                    </form>
                    <form action="/buyimmediate" method="POST">
                        @csrf
                    <input type="hidden" name="product_id" value="{{$product['id']}}">
                    <button class="btn orange-button ">
                            Buy it now
                        </button>
                    </form>
                </div>
            </div>
</div>



</div>
<div class="mt-2 custom-product">
    <div class="trending-wrapper">
    <p class="fs-1 fw-medium">Similar Products</p>
<div class="d-flex gap-5">
@foreach($allproducts as $eachproduct)
  <div class="trending-items d-flex justify-content-center">
  <a href="detail/{{$eachproduct['id']}}" >
    <img class="trending-image" src="{{asset('storage/'. $eachproduct->gallery)}}" >
    <div class="text-dark text-center mt-2 px-2">
      <p class="m-0 text-start fs-5">{{$eachproduct['name']}}</p>
      <p class="m-0 text-start fs-6">{{$eachproduct['price']}}</p>
    </div>
    </a>
  </div>
  @endforeach
</div>
</div>
</div>
@endsection