@extends('adminLayout')
  
@section('adminContent')
<div class="custom-product d-flex justify-content-center">
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
                 <p>Delivery Status : {{$data->status}}</p>
                 <p>Address : {{$data->address}}</p>
                 <p>Payment Status : {{$data->payment_status}}</p>
                 <p>Payment Method : {{$data->payment_method}}</p>
                 <p>Quantity: {{$data->count}}</p>
                 <p>price: {{$data->price}}</p>
                 <p>brand: {{$data->brand}}</p>
                 <p>userName: {{$data->userName}}</p>
                 <p>userMail: {{$data->userMail}}</p>
                 <a href="/deleteOrder/{{$data->orderID}}" class='btn'>delete</a>
                </div>
              </div>
            </div>
            @endforeach
           </div>

      </div>
</div>
    @endsection
