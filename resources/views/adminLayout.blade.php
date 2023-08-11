<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TechWare</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
</head>

<body>
    <nav class="navbar  border-bottom w-100 position-fixed bg-light">
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
                    <a class="nav-link" aria-current="page" href="/admin/products">Products</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " aria-current="page" href="/admins">New Admin</a>
                </li>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/admin/orders">Orders</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/admin/brandinfo">Brands & Categories</a>
                </li>
            </ul>

            <ul class="nav navbar-nav navbar-right d-flex flex-row gap-3">
                <li>
                    <div class="dropdown">
                        <button class="btn" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <img class="navbar-images align-self-center"src="/images/user-logo.png" alt="">
                            @if (Session::has('admin'))
                                {{ Session::get('admin')['name'] }}
                            @else
                            @endif
                        </button>
                        <ul class="dropdown-menu position-absolute ">
                            @if (Session::has('user'))
                                <li><a class="dropdown-item " href="/user/logout">Logout</a></li>
                            @elseif(Session::has('admin'))
                                <li><a class="dropdown-item " href="/admin/logout">Logout</a></li>
                            @else
                            @endif
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </nav>

    @yield('adminContent')
</body>
<style>
    .login-space {
        height: 500px;
        padding-top: 100px;
    }

    .slider-img {
        height: 590px !important;


    }

    .custom-product {
        display: inline-block;
        height: max-content;
        width: 100%;

    }

    .trending-image {
        width: 222px;
        height: 207px;
    }

    .trending-items {
        text-decoration: none;
        width: 222px;
        height: 301px;
        border-radius: 29px;
        background: #FFF;
        box-shadow: 4px 4px 10px 0px rgba(0, 0, 0, 0.25);
    }

    .trending-wrapper {
        margin-left: 100px;
        margin-top: 40px;
        width: 80%;
    }

    .detail-img {
        height: 350px;
    }

    .navbar-images {
        height: 20px;
        width: 20px;
    }

    .nav-item {
        font-weight: 700;
    }

    .cart-count {
        font-size: 10px;
        background-color: #FFA800;
        height: 14px;
        width: 14px;
        font-weight: bold;
        border-radius: 50px;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .search-nav {
        background-color: #D9D9D9 !important;
    }

    .search-area {
        width: 40%;
        height: 30px;
        align-items: center;

    }

    .search-bar {
        border-radius: 50px;
        border: 0px solid;
        height: 100%;
        gap: 5px;
        padding-left: 20px;
        width: 100%;
    }

    footer {
        height: max-content;
    }

    .footer-images {
        height: 15px;
        width: 15px;
        margin-right: 10px;
    }

    .carousel-image {
        width: 100%;
    }

    .search-items {
        float: left;
        width: 10%;
    }

    .search-wrapper {
        margin: 30px;

    }

    .cart-list-divider {
        border-bottom: 1px solid #ccc;
        margin-bottom: 20px;
        padding-bottom: 20px
    }

    a {
        text-decoration: none;
    }

    a:link,
    a:visited,
    a:hover,
    a:active {
        text-decoration: none;
    }

    .orange-button {
        border-radius: 6px;
        background: #FFA800;
    }

    .normal-button {
        border-radius: 6px;
        border: 1px solid #FFA800;
    }

    .normal-button:hover {
        border-radius: 6px;
        background: #FFA800;
    }

    .orange-button:hover {
        border-radius: 6px;
        border: 1px solid #FFA800;
    }

    .form-control {
        box-shadow: 0 0px 0px 0 rgba(0, 0, 0, 0) !important;
        outline: none;
    }

    .form-control:focus {
        box-shadow: 0 00px 0px 0 rgba(0, 0, 0, 0) !important;
        outline: none;
    }

    .dropdown-menu:active {
        border: 1px solid white !important;
    }

    .quantity-button {
        width: 50px;
    }

    input.no-spinners::-webkit-inner-spin-button,
    input.no-spinners::-webkit-outer-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }

    input.no-spinners {
        -moz-appearance: textfield;
    }
    .admin-panel{
        padding-top:50px !important;
    }
</style>

</html>
