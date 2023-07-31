@extends('adminLayout')
  
@section('adminContent')


<div class="custom-product d-flex justify-content-center">
     <div class="col-sm-10">
       <div class="text-end w-75 fw-bold"><a href="/admin/createProductPage" class="btn btn-dark">Add</a></div>
       <h4 class="w-100 text-center fs-2 fw-bold mt-4">Product List </h4>
        <div class="trending-wrapper border-top">
            @foreach($products as $product)
            <div class=" row searched-order cart-list-divider">
             <div class="col-sm-3 d-flex justify-content-center align-items-center bproduct-end">
                <a href="detail/{{$product->id}}">
                    <div class=""><img class="trending-image" src="{{asset('storage/'. $product->gallery)}}"></div>
                  </a>
             </div>
             <div class="col-sm-4">
                    <div class="fw-medium">
                      <p class="fw-bold fs-3">Name : {{$product->name}}</p>
                      <p>Price : {{$product->price}}</p>
                      <p>Description : {{$product->description}}</p>
                      <p>Category : {{$product->category}}</p>
                      <p>Brand: {{$product->brand}}</p>
                    </div>
                    <div><a href="/product/{{$product->id}}/edit" class="btn btn-outline-dark ">Edit</a></div>
                    <div><a href="/deleteProduct/{{$product->id}}" class="btn btn-dark ">Remove</a></div>
             </div>
            </div>
            @endforeach
          </div>
     </div>
</div>
    @endsection



    Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga distinctio, nemo error veniam minus corporis quis blanditiis fugit molestiae culpa obcaecati ex? Magnam, veniam et modi facere eveniet ullam voluptatum?Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur voluptates, a harum maxime totam quam voluptatem laborum quisquam recusandae quibusdam expedita rerum autem, rem eaque esse placeat nisi animi earum. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ullam eveniet cupiditate voluptate fuga, voluptates nesciunt hic ratione porro deleniti, eaque esse architecto nihil mollitia, et provident voluptas corrupti commodi laudantium!