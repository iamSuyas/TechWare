@extends('master')
@section('content')
    <div class="container login-space">
        <div class="row d-flex justify-content-center">
            <div class="col-sm-4 ">
                <div class="text-center fs-3">User Login</div>

                <form action="login" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="email" name="email"class="form-control" id="exampleInputEmail1"
                            aria-describedby="emailHelp">

                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" name="password"class="form-control" id="exampleInputPassword1">
                    </div>

                    <button type="submit" class="btn btn-dark  w-100 py-2">Login</button>
                </form>
                <p class="fw-semibold text-end pt-2">Don't have an account? <a href="/register" class="fw-normal">Sign Up</a></p>
            </div>
        </div>
    </div>
@endsection
