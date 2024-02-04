@extends('master')
@section('content')
    <div class="trending-wrapper px-5">
        <div class="w-100 d-flex justify-content-between align-items-center ">
            <p class="fs-1 fw-medium mt-3">Showing Filtered Products</p>
        </div>
        <div class="d-flex justify-content-between">
            <div class="productfiltersection border-end">
                <form method="GET" action="/filterProducts" class="">
                    <div class="mb-3">
                        <label for="minPrice" class="form-label">Minimum Price:</label>
                        <select class="form-select priceselect" id="minPrice" name="minPrice">
                            <option value="1" selected>Any</option>
                            <option value="5000">Nrs. 5,000</option>
                            <option value="10000">Nrs. 10,000</option>
                            <option value="25000">Nrs. 25,000</option>
                            <option value="50000">Nrs. 50,000</option>
                            <option value="100000">Nrs. 100,000</option>
                            <option value="250000">Nrs. 250,000</option>
                            <option value="500000">Nrs. 500,000</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="maxPrice" class="form-label">Maximum Price:</label>
                        <select class="form-select priceselect" id="maxPrice" name="maxPrice">
                            <option value="999999" selected>Any</option>
                            <option value="5000">Nrs. 5,000</option>
                            <option value="10000">Nrs. 10,000</option>
                            <option value="25000">Nrs. 25,000</option>
                            <option value="50000">Nrs. 50,000</option>
                            <option value="100000">Nrs. 100,000</option>
                            <option value="250000">Nrs. 250,000</option>
                            <option value="500000">Nrs. 500,000</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-dark">Apply Filter</button>
                </form>
            </div>
            
            <div class="d-flex gap-5 flex-wrap justify-content-start productslayout">
                @foreach ($products as $product)
                    <div class="trending-items d-flex justify-content-center">
                        <a href="detail/{{ $product['id'] }}">
                            <img class="trending-image" src="{{ asset('storage/' . $product->gallery) }}">
                            <div class="text-dark text-center mt-2 px-2 position-absolute">
                                <p class="m-0 text-start fs-5">{{ $product['name'] }}</p>
                                <p class="m-0 text-start fs-6">NPR {{ $product['price'] }}</p>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
</div>

@endsection
