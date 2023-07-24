@extends('master')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-6">
            <img class="detail-img" src="{{$product['gallery']}}" alt="">
        </div>
        <div class="col-sm-6">
            <a href="/">Go back</a>
            <h2>{{$product['name']}}</h2>
            <h3>${{$product['price']}}</h3>
            <h4>Details:{{$product['description']}}</h4>
            <h4>Category:{{$product['category']}}</h4>
            <button class="btn btn-primary">
                Add to cart
            </button>
            <button class="btn btn-success">
                Buy now
            </button>
        </div>
    </div>
</div>
@endsection