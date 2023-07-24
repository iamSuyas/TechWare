@extends('master')
@section('content')

<div class="custom-product">

      <div id="carouselExampleControls" class="carousel slide justify-center" data-bs-ride="carousel">
        <div class="carousel-inner">
          @foreach($carousel_assets as $asset)
      
              <div class="carousel-item {{$asset['id']==1?'active':''}}">
                <img class="slider-img carousel-image" src="{{$asset['image']}}" >
              </div>
      
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
        <a href="detail/{{$product['id']}}">
          <img class="trending-image" src="{{$product['gallery']}}" >
          <div class="">
            <h3>{{$product['name']}}</h3>
          </div>
          </a>
        </div>
        @endforeach
      </div>
    </div>
</div>


@endsection<!--  -->