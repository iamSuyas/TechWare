@extends('master')
@section('content')

<div class=" custom-product d-flex justify-content-evenly">
    <div class="w-75">
      <div class="search-wrapper">
    
       
    <table class="table">
  <thead>
    <tr>
      <th scope="col">sn</th>
      <th scope="col">Name</th>
      <th scope="col">Description</th>
      <th scope="col" class="text-center">Image</th>
      
      <th scope="col">Price</th>
      <th scope="col" class='text-center'>Quantity</th>
      <th scope="col"></th>

    </tr>
  </thead>
  <tbody>
  <form id="updateForm" action="updatecart" method="POST">
        @csrf
        @method('PUT')
  @foreach($products as $product)
    <tr class="">
      <td>
      <input type="checkbox" name="selected_cart_ids[]" value="{{$product->cartId}}">
      </td>
      <td>{{$product->name}}</td>
      <td>{{$product->description}}</td>
      <td class="d-flex justify-content-center"><img class="trending-image" src="{{asset('storage/'. $product->gallery)}}" ></td>
      <td>{{$product->price}}</td>
      <td>
    
    
        <div class="d-flex justify-content-center align-items-center">
              
      <a class="btn btn-sm btn-dark" onclick="decrementCount({{$product->cartId}}, {{$product->cartCount}})">-</a>
      <input type="number" id="count_{{$product->cartId}}" name="cart_count_{{$product->cartId}}" value="{{$product->cartCount}}" class="form-control mx-1 quantity-button no-spinners" min="1">
      <a class="btn btn-sm btn-dark" onclick="incrementCount({{$product->cartId}}, {{$product->cartCount}})">+</a>
    </div>
 
      


    
    
    
  </td>
  <td><a href="/removecart/{{$product->cartId}}" class="btn btn-outline-dark ">Remove</a>
  
</td>
</tr>
@endforeach

</tbody>
</table>
</form>
<div class="order w-100 d-flex justify-content-end">
  </div>
</div>
<div class="order w-100 d-flex justify-content-end">
<button type="submit" form="updateForm" class="btn btn-dark ">Order Now</button></div>

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

    function orderSelectedItems() {
    const checkboxes = document.querySelectorAll('input[name="selected_cart_ids[]"]:checked');
    if (checkboxes.length == 0) {
            alert('Please select at least one item to order.');
        };
    };
    
</script>


<!-- dbsjbfjds -->


@endsection+-