@extends('master')
@section('content')

<div class="custom-product">
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        @foreach($products as $product)
        <a href="detail/{{$product['id']}}">
            <div class="carousel-item {{$product['id']==1?'active':''}}">
              <img class="slider-img" src="{{$product['gallery']}}" >
            </div>
        </a>
        @endforeach
      </div>

      <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon black" aria-hidden="true"></span>
        <span class="sr-only"></span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only"></span>
      </a>
    </div>


    <div class="trending-wrapper">
        <h3>Trending Products</h3> 
        @foreach($products as $product)
        <div class="trending-items">
          <img class="trending-image" src="{{$product['gallery']}}" >
          <div class="">
            <h3>{{$product['name']}}</h3>
          </div>
        </div>
        @endforeach
      </div>
    </div>
</div>


@endsection<!--  -->