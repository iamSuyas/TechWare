@extends('master')
@section("content")
<div class="custom-product d-flex justify-content-center">
     <div class="col-sm-10">
         <h4 class="w-100 text-center fs-2 fw-bold mt-4">My Orders </h4>
        <div class="trending-wrapper border-top">
            @foreach($orders as $order)
            <div class=" row searched-order cart-list-divider">
             <div class="col-sm-3 d-flex justify-content-center align-items-center border-end">
                <a href="detail/{{$order->id}}">
                    <div class=""><img class="trending-image" src="{{asset('storage/'. $order->gallery)}}"></div>
                  </a>
             </div>
             <div class="col-sm-4">
                    <div class="fw-medium">
                      <p class="fw-bold fs-3">Name : {{$order->name}}</p>
                      <p>Delivery Status : {{$order->status}}</p>
                      <p>Address : {{$order->address}}</p>
                      <p>Payment Status : {{$order->payment_status}}</p>
                      <p>Payment Method : {{$order->payment_method}}</p>
                      <p>Quantity: {{$order->count}}</p>
                    </div>
             </div>
            </div>
            @endforeach
          </div>

     </div>
</div>
@endsection 