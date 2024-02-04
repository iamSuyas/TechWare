<?php
use App\Http\Controllers\ProductController;
$total = 0;
if (Session::has('user')) {
    $total = ProductController::cartItem();
}
?>

<nav class="navbar  border-bottom bg-light">
    <div class="container">
        <div class="d-flex align-items-center gap-1">
            <img src="/images/phone.png" class="navbar-images"alt="">
            <div class="h6 m-0" href="#">984xxxxxxx</div>
        </div>

        <ul class="nav navbar-nav navbar-right d-flex flex-row gap-3">
            <li>
                <a href="#" class="nav-link"><img class="navbar-images"src="/images/youtube.png"
                        alt=""></a>
            </li>
            <li>
                <a href="#" class="nav-link"><img class="navbar-images"src="/images/linkedin.png"
                        alt=""></a>
            </li>
            <li>
                <a href="#" class="nav-link"><img class="navbar-images"src="/images/facebook.png"
                        alt=""></a>
            </li>
            <li>
                <a href="#" class="nav-link"><img class="navbar-images"src="/images/twitter.png"
                        alt=""></a>
            </li>
            <li>
                <a href="#" class="nav-link"><img class="navbar-images"src="/images/instagram.png"
                        alt=""></a>
            </li>
        </ul>
    </div>
</nav>

<nav class="navbar  border-bottom bg-light">
    <div class="container">
        <div class="d-flex align-items-center gap-1">
            <a class="navbar-brand" href="/">
                <img src="/images/TW_logo.png" class="navbar-images"alt="">
                TechWare</a>
        </div>
        <ul class="navbar-nav d-flex flex-row navbar-center mb-2 mb-lg-0 gap-5">
            <li class="nav-item">
                <a class="nav-link" aria-current="page" href="/">Home</a>
            </li>
            <li class="nav-item">

                <a class="nav-link" aria-current="page" href="#">Brands</a>
            </li>
            <li class="nav-item">
                @if (Session::has('admin'))
                    <a class="nav-link " aria-current="page" href="admin/orders">Admin Panel</a>
                @else
                    <a class="nav-link " aria-current="page" href="#">Categories</a>
                @endif
            </li>
            </li>
            <li class="nav-item">
                @if (Session::has('user'))
                    <a class="nav-link" href="/myorder">Orders</a>
                @elseif(Session::has('admin'))
                    <a class="nav-link" href="/admin/orders">Orders</a>
                @endif
            </li>
        </ul>

        <ul class="nav navbar-nav navbar-right d-flex flex-row gap-3">
            <li class="d-flex">
                @if (Session::has('admin'))
                @else
                    <a href="/cartlist" class="nav-link d-flex p-0"><img
                            class="navbar-images align-self-center"src="/images/shopping-cart.png" alt="">
                        <div class="cart-count">{{ $total }}</div>
                    </a>
                @endif
            </li>
            <li>
                <div class="dropdown">
                    <button class="btn" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <img class="navbar-images align-self-center"src="/images/user-logo.png" alt="">
                        @if (Session::has('user'))
                            {{ Session::get('user')['name'] }}
                        @elseif(Session::has('admin'))
                            {{ Session::get('admin')['name'] }}
                        @else
                        @endif
                    </button>
                    <ul class="dropdown-menu position-absolute ">
                        @if (Session::has('user'))
                            <li><a class="dropdown-item " href="/editUser/{{ Session::get('user')['id'] }}">Account Settings</a></li>
                            <li><a class="dropdown-item " href="/user/logout">Logout</a></li>
                        @elseif(Session::has('admin'))
                            <li><a class="dropdown-item " href="/admin/logout">Logout</a></li>
                        @else
                            <li><a href="/login" class="dropdown-item">Login</a></li>
                            <li><a href="/register" class="dropdown-item">Sign Up</a></li>
                            <li><a href="/admin/login" class="dropdown-item">Admin Login</a></li>
                        @endif
                    </ul>
                </div>
            </li>

        </ul>
    </div>
</nav>

<nav class="navbar border-bottom bg-light search-nav ">
    <div class="container d-flex justify-content-center align-items-center">
        <form action="/search"class="search-area m-0" role="search">
            <input class="search-bar" name="query"type="search" placeholder="Search entire store here"
                aria-label="Search">
            <!-- <button class="btn btn-outline-success" type="submit">Search</button> -->
        </form>
    </div>
</nav>
