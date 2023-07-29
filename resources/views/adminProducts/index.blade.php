@extends('adminLayout')
  
@section('adminContent')
<!-- <div class="custom-product d-flex justify-content-center">
       <div class="col-sm-10">
         <h4 class="w-100 text-center fs-2 fw-bold mt-4">My Orders </h4>
        <div class="trending-wrapper border-top">
          

            @foreach($ordersData as $data)
            <div class=" row searched-order cart-list-divider">
              <div class="col-sm-3 d-flex my-3 justify-content-center align-items-center border-end">
                <div><img class="trending-image" src="{{$data->gallery}}"></div>
              </div>
             <div class="col-sm-4">
               <div class="fw-medium">
                 <p class="fw-bold fs-3">Name : {{$data->name}}</p>
                 <p>price: {{$data->price}}</p>
                 <p>brand: {{$data->brand}}</p>
                 <p>description: {{$data->brand}}</p>
                 <p>category: {{$data->category}}</p>
                 <a href="/deleteOrder/{{$data->orderID}}" class='btn'>delete</a>
                </div>
              </div>
            </div>
            @endforeach
           </div>

      </div>
</div> -->

<div class="container">
        <div class="text-right">
            <a href="/items/create" class="btn btn-dark mt-2">Add Items</a>
        </div>
        <h1 class="text-center">Items</h1>
        <div class="container">           
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Sn</th>
        <th>Name</th>
        <th>Price</th>
        <th>Category</th>
        <th>Image</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach($items as $item)
      <tr>
        <td>{{$loop->iteration}}</td>
        <td>{{$item->name}}</td>
        <td>{{$item->price}}</td>
        <td>{{$item->category->name}}</td>
        <td><img src="{{'/storage/'.$item->image}}" alt="" width="50" height="50"/></td>
        <td>
            <a href="/items/{{$item->id}}/edit" class="btn btn-outline-dark btn-sm">Edit</a>
            <form action="/items/{{$item->id}}"  method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-outline-danger btn-sm">Delete</button>
                    </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>

    </div>
    @endsection
