@extends('adminLayout')

@section('adminContent')
    <div class="custom-product d-flex justify-content-center">
        <div class="col-sm-10">
            <h4 class="w-100 text-center fs-2 fw-bold mt-4 admin-panel">Orders </h4>
            <div class="trending-wrapper border-top">
                <form action="/changeStatus" method="POST">
                    @csrf
                    @method('PUT')
                    @foreach ($ordersData as $data)
                        <div class=" row searched-order cart-list-divider">
                            <div class="col-sm-3 d-flex my-3 justify-content-center align-items-center border-end">
                                <div><img class="trending-image" src="{{ asset('storage/' . $data->gallery) }}"></div>
                            </div>
                            <div class="col-sm-8">
                                <div class="fw-medium">
                                    <p class="fw-bold fs-3">Name : {{ $data->name }}</p>
                                    <div class="d-flex gap-5 ">
                                        <div class="">
                                            <p>Address : {{ $data->address }}</p>
                                            <p>Payment Status : {{ $data->payment_status }}</p>
                                            <p>Payment Method : {{ $data->payment_method }}</p>
                                            <p>Quantity: {{ $data->count }}</p>
                                        </div>
                                        <div class="mx-5">
                                            <p>price: NPR {{ $data->price }}</p>
                                            <p>brand: {{ $data->brand }}</p>
                                            <p>userName: {{ $data->userName }}</p>
                                            <p>userMail: {{ $data->userMail }}</p>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="name" class="form-label">Delivery Status</label>
                                        <select name="status[{{ $data->orderID }}]" class="form-control w-25">
                                            <option value="Order Placed" @if ($data->status === 'Order Placed') selected @endif>
                                                Order Placed</option>
                                            <option value="Package in logistics"
                                                @if ($data->status === 'Package in logistics') selected @endif>Package in logistics
                                            </option>
                                            <option value="Package shipped"
                                                @if ($data->status === 'Package shipped') selected @endif>Package shipped</option>
                                            <option value="Out for delivery"
                                                @if ($data->status === 'Out for delivery') selected @endif>Out for delivery</option>
                                            <option value="Delivered" @if ($data->status === 'Delivered') selected @endif>
                                                Delivered</option>
                                        </select>
                                    </div>
                                    <a href="/deleteOrder/{{ $data->orderID }}" class='btn btn-dark '>delete</a>
                                    <button type="submit" class="btn btn-outline-dark">Save changes</button>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </form>
            </div>

        </div>
    </div>
@endsection
