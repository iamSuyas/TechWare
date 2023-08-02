@extends('master')
@section('content')
<div class="trending-wrapper px-5">
    <div class="w-100 d-flex justify-content-between align-items-center ">
      <p class="fs-1 fw-medium">Showing All Products</p>
        <p class="fs-6 fw-light"><a href="/allProducts" class="link-dark link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover ">All Products>></a></p>
    </div>
<div class="d-flex gap-5 flex-wrap">
@foreach($products as $product)
  <div class="trending-items d-flex justify-content-center">
  <a href="detail/{{$product['id']}}">
    <img class="trending-image" src="{{asset('storage/'. $product->gallery)}}" >
    <div class="text-dark text-center mt-2 px-2 position-absolute">
      <p class="m-0 text-start fs-5">{{$product['name']}}</p>
      <p class="m-0 text-start fs-6">NPR {{$product['price']}}</p>
    </div>
    </a>
  </div>
  @endforeach
</div>
</div>
    </div>
</div>

@endsection