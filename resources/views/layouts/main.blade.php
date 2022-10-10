<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    {{-- Bootstrap Icons --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <link rel="stylesheet" href="/css/signin.css">

    <link rel="stylesheet" href="/css/style.css">
    
    <title>Fahmi Blog | {{ $title }}</title>
</head>
<body>

    <header class="header">

        <a href="#" class="logo"> <i class="fas fa-shopping-basket"></i> groco </a>
    
        <nav class="navbar">
            <a href="/">Home</a>
            <a href="/products">Products</a>
            <a href="/categories">Categories</a>
            {{-- <a href="/posts">blogs</a> --}}
        </nav>
    
        <div class="icons">
            <div class="fas fa-bars" id="menu-btn"></div>
            <div class="fas fa-search" id="search-btn"></div>
            <div class="fas fa-shopping-cart" id="cart-btn"></div>
            <div class="fas fa-user" id="login-btn"></div>
        </div>
    
        <form action="" class="search-form">
            <input type="search" id="search-box" placeholder="search here...">
            <label for="search-box" class="fas fa-search"></label>
        </form>
    
        <div class="shopping-cart">
            <div class="box">
                <i class="fas fa-trash"></i>
                <img src="image/cart-img-1.png" alt="">
                <div class="content">
                    <h3>watermelon</h3>
                    <span class="price">$4.99/-</span>
                    <span class="quantity">qty : 1</span>
                </div>
            </div>
            <div class="box">
                <i class="fas fa-trash"></i>
                <img src="image/cart-img-2.png" alt="">
                <div class="content">
                    <h3>onion</h3>
                    <span class="price">$4.99/-</span>
                    <span class="quantity">qty : 1</span>
                </div>
            </div>
            <div class="box">
                <i class="fas fa-trash"></i>
                <img src="image/cart-img-3.png" alt="">
                <div class="content">
                    <h3>chicken</h3>
                    <span class="price">$4.99/-</span>
                    <span class="quantity">qty : 1</span>
                </div>
            </div>
            <div class="total"> total : $19.69/- </div>
            <a href="#" class="btn">checkout</a>
        </div>
    
        <div action="" class="login-form">
            <ul class="list-group">
                @auth
                <li class="list-group-item {{ Request::is('login') ? 'active' : '' }}">selamat Datang, {{ auth()->user()->name }}</li>
                <li class="list-group-item ">
                    @can('admin')
                        <a class="dropdown-item" href="/dashboard"><i class="bi bi-layout-text-sidebar-reverse"></i> Dasboard</a>
                    @endcan
                </li>
                <li class="list-group-item">
                    <form action="/logout" method="post">
                        @csrf
                        <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right"></i> Logout</button>
                    </form>
                </li>
                @else
                <li class="list-group-item"><a href="/login"><i class="bi bi-box-arrow-in-right"></i>Login</a></li>
                <li class="list-group-item"><a href="/register"><i class="bi bi-box-arrow-in-right"></i>Registrasi</a></li>
                @endauth
            </ul>
        </div>
    
    </header>


    <div class="container mt-4">
        @yield('container')
    </div>
    
    @include('sweetalert::alert')


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
<script src="/js/script.js"></script>
</body>
</html>