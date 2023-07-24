<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TechWare</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</head>
<body>
    {{View::make('header')}}
    @yield('content')
    {{View::make('footer')}}
</body>
<style>
    .login-space{
        height:500px;
        padding-top:100px;
    }
    .slider-img{
        height:590px !important;    
        

    }
   
    .custom-product{
        display: inline-block;
        height:max-content;
        width:100%;
        
    }
    .trending-image{
        height:100px;
    }
    .trending-items{
        float:left;
        width:20%;
    }
    .trending-wrapper{
        margin:30px;

    }
    .detail-img{
        height:200px;
    }
    .navbar-images{
        height:20px;
        width:20px;
    }
    .nav-item{
        font-weight:700;
    }
    .cart-count{
        font-size:10px;
        background-color: #FFA800;
        height:14px;
        width:14px;
        font-weight:bold;
        border-radius:50px;
        display:flex;
        justify-content:center;
        align-items:center;
    }
    .search-nav{
        background-color: #D9D9D9 !important;
    }
    .search-area{
        width: 40%;
        height:30px;
        align-items:center;
        
    }
    .search-bar{
        border-radius:50px;
        border:0px solid;
        height:100%;
        gap:5px;
        padding-left:20px;
        width: 100%;
    }
    footer{
        height:max-content;
    }
    .footer-images{
        height:15px;
        width:15px;
        margin-right:10px;
    }
    .carousel-image{
        width:100%;
    }
    .search-items{
        float:left;
        width:10%;
    }
    .search-wrapper{
        margin:30px;

    }
   

   
</style>
</html>