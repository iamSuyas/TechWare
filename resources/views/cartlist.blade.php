@extends('master')
@section('content')
<div class="custom-product d-flex justify-content-center">
     <div class="col-sm-10">
         <h4 class="w-100 text-center fs-2 fw-bold mt-4">My Cart </h4>
        <div class="trending-wrapper">
        <form id="updateForm" action="updatecart" method="POST">
        @csrf
        @method('PUT')
            @foreach($products as $product)
            <div class=" d-flex searched-product cart-list-divider flex-nowrap">
              <div class="col-sm-3 d-flex justify-content-evenly align-items-center">
                <div class="mx-2"><input type="checkbox" name="selected_cart_ids[]" value="{{$product->cartId}}" class="rounded"></div>
                <a href="detail/{{$product->id}}">
                    <div class=""><img class="trending-image" src="{{asset('storage/'. $product->gallery)}}"></div>
                  </a>
             </div>
             <div class="col-sm-8 ">
                    <div class="fw-medium">
                      <p class="fw-semibold fs-4">{{$product->name}}</p>
                      <div class="d-flex gap-1 ">
                        <p class="fs-6 mb-0 fw-light text-decoration-underline">{{$product->brand}}</p>
                        <p class="fs-6 mb-0 fw-light"> | {{$product->category}}</p>
                      </div>
                      <p>NPR {{$product->price}}</p>
                    </div>
                    
                    <div class="d-flex justify-self-start align-items-center">
              <a class="btn btn-sm btn-dark" onclick="decrementCount({{$product->cartId}}, {{$product->cartCount}})">-</a>
              <input type="number" id="count_{{$product->cartId}}" name="cart_count_{{$product->cartId}}" value="{{$product->cartCount}}" class="form-control mx-1 quantity-button no-spinners" min="1">
              <a class="btn btn-sm btn-dark" onclick="incrementCount({{$product->cartId}}, {{$product->cartCount}})">+</a>
            </div>
          </div>
          <div class="d-flex justify-content-center align-items-center"><a href="/removecart/{{$product->cartId}}" class="btn btn-outline-dark trash-can-container"><img src="/images/delete.png" alt="" class="trashcan"></a></div>
            </div>

            @endforeach
          </div>
          <div class="order w-100 d-flex justify-content-end">
<button type="submit" form="updateForm" class="btn btn-dark ">Order Now</button></div>

    </div>
     </div>
</div>


    <script>
    function incrementCount(cartId, currentCount) {
        var inputElement = document.getElementById('count_' + cartId);
        inputElement.value = parseInt(inputElement.value) + 1;
    }

    function decrementCount(cartId, currentCount) {
        var inputElement = document.getElementById('count_' + cartId);
        var updatedCount = parseInt(inputElement.value) - 1;
        inputElement.value = updatedCount > 0 ? updatedCount : 1;
    }

    function productSelectedItems() {
    const checkboxes = document.querySelectorAll('input[name="selected_cart_ids[]"]:checked');
    if (checkboxes.length == 0) {
            alert('Please select at least one item to order.');
        };
    };
    
</script>


<!-- dbsjbfjds -->


@endsection+-