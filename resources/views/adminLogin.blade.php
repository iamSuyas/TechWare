@extends('master')

@section('content')
    <div class="container login-space">
        <div class="row d-flex justify-content-center">
            <div class="col-sm-4 ">
                <div class="text-center fs-3">Admin Login</div>
                <form action="/admin/loginattempt" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="email" name="email"class="form-control" id="exampleInputEmail1">  
                        @error('email')       
                        <p class="text-danger">{{$error}}</p>
                        @enderror
                               
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" name="password"class="form-control" id="exampleInputPassword1">
                        @error('password')       
                        <p class="text-danger">{{$error}}</p>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-dark  w-100 py-2">Login</button>
                </form>
            </div>
        </div>
    </div>
@endsection
