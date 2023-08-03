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
    <div class="fixed-top">
        {{ View::make('header') }}
    </div>

    <div class="content-style">@yield('content')</div>
    {{ View::make('footer') }}
</body>
<style>
    .login-space {
        height: 500px;
        padding-top: 100px;
    }

    .slider-img {
        height: 650px !important;


    }

    .content-style {
        margin-top: 8%;
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
        max-width: 222px;
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
        height: 301px;
        border-radius: 29px;
        background: #FFF;
        box-shadow: 4px 4px 10px 0px rgba(0, 0, 0, 0.25);
    }

    .trending-wrapper {
        margin: 0;
        margin-top: 40px;
        width: 100%;
    }

    .trending-items .text-start.fs-5 {
        max-width: 212px;
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
    }

    .detail-img {
        height: 350px;
    }

    .detail-img-container {
        width: 613px;
        height: 329px;
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
        padding-bottom: 20px;
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

    .promo-banner {
        background-color: #333335;
    }

    .detail-description {
        font-weight: 500;
        width: 35%;
        margin-left: 20%;
        margin-top: 3%;
        margin-bottom: 3%;
    }

    input[type="checkbox"] {
        accent-color: #000;

        -ms-transform: scale(1.3);
        /* IE */
        -moz-transform: scale(1.3);
        /* FF */
        -webkit-transform: scale(1.3);
        /* Safari and Chrome */
        -o-transform: scale(1.3);
        /* Opera */
    }

    .trashcan {
        width: 25px;
        height: 30px;
    }

    .trash-can-container {
        width: 30px;
        height: 40px;
        padding: 0;
        padding-top: 3px;
    }
</style>

</html>
