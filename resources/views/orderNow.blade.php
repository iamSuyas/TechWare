@extends('master')
@section('content')
    <div class="d-flex custom-product flex-column justify-conttent-center align-items-center pt-5">
        <div class="w-50">
            <table class="table">
                <thead>
                    <tr>
                        <th class="fs-4">Checkout Summary</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Sub-Total</td>
                        <td>NPR {{ $total }}</td>
                    </tr>
                    <tr>
                        <td>VAT</td>
                        <td>NPR {{ number_format(0.13 * $total, 2) }}</td>

                    </tr>
                    <tr>
                        <td>Shipping</td>
                        <td>@php
                            $shippingCost = $total > 5000 ? 0.01 * $total : 0.05 * $total;
                        @endphp
                            NPR {{ number_format($shippingCost, 2) }}
                        </td>
                    </tr>
                    <tr>
                        <td>Total</td>
                        <td>NPR {{ number_format($total + 0.13 * $total + $shippingCost, 2) }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="d-flex">
            <form action="/orderplace" method="POST">
                @csrf
                <div class="form-control d-flex flex-column border-0 gap-2">
                    <label for="address">Address</label>
                    <div><input type="text" name="address" class="w-50" value="{{ $order->address ?? '' }}"required></div>
                    <div><label for="paymentMethod">Payment Method</label></div>
                    @foreach($selectedCartIds as $selected)
                    <input type="hidden" name="selectedCartIds[]" value={{$selected}}>
                    @endforeach
                    <div class="d-flex gap-3">
                        <div class="d-flex gap-1"><input class="form-check-input" type="radio" value="E-sewa"
                                name="paymentmethod"><span>E-sewa</span></div>
                        <div class="d-flex gap-1"><input class="form-check-input" type="radio" value="Khalti"
                                name="paymentmethod"><span>Khalti</span></div>
                        <div class="d-flex gap-1"><input class="form-check-input" type="radio" value="ConnectIPS"
                                name="paymentmethod"><span>ConnectIPS</span></div>
                        <div class="d-flex gap-1"><input class="form-check-input" type="radio" value="COD"
                                name="paymentmethod" checked><span>CashOnDelivery</span></div>
                    </div>
                </div>
                <div class="w-100 d-flex px-3 pt-1"><button type="submit" class="btn btn-outline-dark">Order Now</button>
                </div>
            </form>
        </div>
    </div>
@endsection
