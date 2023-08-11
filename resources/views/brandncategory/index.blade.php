@extends('adminLayout')

@section('adminContent')
    <div class="d-flex flex-column justify-content-center align-items-center admin-panel">
        <div class="fs-1 text-center mb-3 fw-bold mt-2">Brands & Categories</div>
        <div class="d-flex gap-4 w-50">
            <div class="w-75">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Id </th>
                            <th>Brand Name</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($brands as $brand)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $brand->name }}</td>
                                <td>
                                    <a href="/deleteBrand/{{ $brand->id }}" class="btn btn-outline-dark btn-sm">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="w-75">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Id </th>
                            <th>Category Name</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($categories as $category)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $category->name }}</td>
                                <td>
                                    <a href="/deleteCategory/{{ $category->id }}" class="btn btn-outline-dark btn-sm">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="mb-3 w-100 d-flex justify-content-center gap-5 mt-3">
        <form action="/createBrand" method="POST" class="d-flex flex-column">
            @csrf
            <input type="text" name="name" class="form-control " placeholder="Brand Name">
            <button class="btn btn-dark mt-2 w-50 align-self-center" type="submit">Create</button>
        </form>
        <form action='/createCategory' method="POST" class="d-flex flex-column">
            @csrf
            <input type="text" name="name" class="form-control" placeholder="Category Name">
            <button class="btn btn-dark mt-2 w-50 align-self-center" type="submit">Create</button>
        </form>
    </div>
@endsection
