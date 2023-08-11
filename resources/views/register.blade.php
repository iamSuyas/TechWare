@extends('master')
@section('content')
    <div class="container login-space">
        <div class="row d-flex justify-content-center ">
            <div class="col-sm-4">
                <div class="text-center fs-3">Sign Up</div>
                <form action="register" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleInputName" class="form-label">Name</label>
                        <input type="text" name="name"class="form-control" id="exampleInputName1"
                            aria-describedby="emailHelp">
                        @error('name')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="email" name="email"class="form-control" id="exampleInputEmail1"
                            aria-describedby="emailHelp">
                        @error('email')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" name="password"class="form-control" id="exampleInputPassword1">
                        @error('password')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-dark  w-100 py-2">Sign Up</button>
                </form>
            </div>
        </div>
    </div>
@endsection
