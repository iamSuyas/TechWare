@extends('master')
@section('content')
<div class="trending-wrapper">
    <p class="fs-1 fw-medium">Trending Products</p>
<div class="d-flex gap-5">
@foreach($products as $product)
  <div class="trending-items d-flex justify-content-center">
  <a href="detail/{{$product['id']}}" >
    <img class="trending-image" src="{{asset('storage/'. $product->gallery)}}" >
    <div class="text-dark text-center mt-2 px-2 position-absolute">
      <p class="m-0 text-start fs-5">{{$product['name']}}</p>
      <p class="m-0 text-start fs-6">Rs. {{$product['price']}}</p>
    </div>
    </a>
  </div>
  @endforeach
</div>
</div>


@endsection