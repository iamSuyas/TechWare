@extends('master')
@section('content')

<div class="custom-product">
    <div class="search-wrapper">
        <h4>Result for Products</h4> 
        <div class="d-flex flex-wrap gap-3">
            @foreach($products as $product)
            <div class="search-items">
            
                  <a href="detail/{{$product['id']}}">
                      <img class="trending-image" src="{{asset('storage/'. $product->gallery)}}" >
                      <div class="">
                        <h4>{{$product['name']}}</h4>
                        <h4>{{$product['description']}}</h4>
            
                  </div>
              </a>
            </div>
            @endforeach
        </div>
      </div>
    </div>
@endsection