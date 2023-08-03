@extends('master')
@section('content')
    <div class="custom-product">
        <div id="carouselExampleControls" class="carousel slide justify-center" data-bs-ride="carousel">
            <div class="carousel-inner">
                @foreach ($carousel_assets as $asset)
                    <div class="carousel-item {{ $asset['id'] == 1 ? 'active' : '' }}">
                        <img class="slider-img carousel-image" src="{{ $asset['image'] }}">
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
        <div class="trending-wrapper px-5">
            <div class="w-100 d-flex justify-content-between align-items-center ">
                <p class="fs-1 fw-medium">Trending Products</p>
                <p class="fs-6 fw-light"><a href="/allProducts"
                        class="link-dark link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover ">All
                        Products>></a></p>
            </div>
            <div class="d-flex gap-5">
                @foreach ($trendingproducts as $product)
                    <div class="trending-items d-flex justify-content-center">
                        <a href="detail/{{ $product['id'] }}">
                            <img class="trending-image" src="{{ asset('storage/' . $product->gallery) }}">
                            <div class="text-dark text-center mt-2 px-2 position-absolute">
                                <p class="m-0 text-start fs-5">{{ $product['name'] }}</p>
                                <p class="m-0 text-start fs-6">NPR {{ $product['price'] }}</p>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="w-100 d-flex justify-content-center mt-5 promo-banner"><img src="/images/BlackXBOXSeriesS.jpg"
                alt="" class="w-75"></div>
        <div class="trending-wrapper px-5">
            <div class="w-100 d-flex justify-content-between align-items-center ">
                <p class="fs-1 fw-medium">New Releases</p>
                <p class="fs-6 fw-light"><a href="/allProducts"
                        class="link-dark link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover ">All
                        Products>></a></p>
            </div>
            <div class="d-flex gap-5">
                @foreach ($newproducts as $product)
                    <div class="trending-items d-flex justify-content-center">
                        <a href="detail/{{ $product['id'] }}">
                            <img class="trending-image" src="{{ asset('storage/' . $product->gallery) }}">
                            <div class="text-dark text-center mt-2 px-2 position-absolute">
                                <p class="m-0 text-start fs-5">{{ $product['name'] }}</p>
                                <p class="m-0 text-start fs-6">NPR {{ $product['price'] }}</p>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    </div>
@endsection
