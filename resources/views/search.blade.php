@extends('master')
@section('content')

<div class="custom-product">
    <div class="search-wrapper">
        <h4>Showing results for "{{$query}}"</h4> 
        <div class="d-flex flex-wrap gap-3">
            @foreach($products as $product)
            <div class="trending-items d-flex justify-content-center flex-wrap">
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
    </div>
@endsection
