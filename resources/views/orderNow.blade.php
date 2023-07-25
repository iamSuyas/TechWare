@extends('master')
@section('content')

<div class=" container custom-product">
<table class="table">
  <thead>
    <tr>
      <th>Checkout Summary</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Sub-Total</td>
      <td>${{$total}}</td>
    </tr>
    <tr>
      <td>VAT</td>
      <td>$0</td>
      
    </tr>
    <tr>
      <td>Shipping</td>
      <td>$10</td>
    </tr>
    <tr>
      <td>Total</td>
      <td>${{$total+10}}</td>
    </tr>
  </tbody>
</table>
<form action="/orderplace" method="POST">
    @csrf
  <div class="form-control d-flex flex-column border-0">
      <div><input type="text" name="address" class="w-25"  required></div>
    <div><label for="paymentMethod">Payment Method</label></div>
    <div class="d-flex gap-3">
        <div class="d-flex gap-1"><input class="form-check-input" type="radio" value="E-sewa" name="paymentmethod"><span>E-sewa</span></div>
        <div class="d-flex gap-1"><input class="form-check-input" type="radio" value="Khalti" name="paymentmethod"><span>Khalti</span></div>
        <div class="d-flex gap-1"><input class="form-check-input" type="radio" value="ConnectIPS" name="paymentmethod"><span>ConnectIPS</span></div>
        <div class="d-flex gap-1"><input class="form-check-input" type="radio" value="COD" name="paymentmethod" checked><span>CashOnDelivery</span></div>
    </div>
</div>
  <button type="submit" class="btn btn-primary">Order Now</button>
</form>
    </div>




<!-- dbsjbfjds -->


@endsection