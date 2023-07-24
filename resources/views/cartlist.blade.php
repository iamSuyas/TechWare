@extends('master')
@section('content')

<div class=" container custom-product">
    <div class="search-wrapper">
       
    <table class="table">
  <thead>
    <tr>
      <th scope="col">S.N.</th>
      <th scope="col">Name</th>
      <th scope="col">Description</th>
      <th scope="col" class="text-center">Image</th>
      <th scope="col">Price</th>
      <th scope="col"></th>

    </tr>
  </thead>
  <tbody>
  @foreach($products as $product)
    <tr class="">
      <td>{{$loop->iteration}}</td>
      <td>{{$product->name}}</td>
      <td>{{$product->description}}</td>
      <td class="d-flex justify-content-center"><img class="trending-image" src="{{$product->gallery}}" ></td>
      <td>{{$product->price}}</td>
      <td><a href="/removecart/{{$product->cartId}}" class="btn btn-warning">Remove</a></td>
    </tr>
    @endforeach
  </tbody>
</table>
<div class="order w-100 d-flex justify-content-end"><a href="ordernow" class="btn btn-success">Order Now</a></div>
      </div>
    </div>




<!-- dbsjbfjds -->


@endsection