@extends('adminLayout')

@section('adminContent')
    <div class="container login-space">
        <div class="row d-flex justify-content-center ">
            <div class="fs-1 text-center mb-3 fw-bold">Create an Admin</div>
            <div class="col-sm-4">
                <form action="/admin/register" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleInputName" class="form-label">Name</label>
                        <input type="text" name="name"class="form-control" id="exampleInputName1"
                            aria-describedby="emailHelp">
                            @error('name')
                            <p class="text-danger">{{$message}}</p>
                            @enderror
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="email" name="email"class="form-control" id="exampleInputEmail1"
                            aria-describedby="emailHelp">
                            @error('email')
                            <p class="text-danger">{{$message}}</p>
                            @enderror
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" name="password"class="form-control" id="exampleInputPassword1">
                    </div>
                    @error('password')
                    <p class="text-danger">{{$errormessage}}</p>
                     @enderror

                    <button type="submit" class="btn btn-dark  w-100 py-2">Register</button>
                </form>
            </div>
        </div>
    </div>
@endsection
