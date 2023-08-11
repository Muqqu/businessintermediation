<nav class="navbar navbar-expand-lg navbar-dark">
    <div class="d-flex align-items-center logo-wrapper">
        <a class="navbar-brand" href="{{ route('home') }}"><img src="{{ asset('assets/img/png/logo.png') }}" alt=""></a>
        <form role="search">
            <div class="search-wrapper">
                <input class="form-control" type="search" placeholder="What Are You you Looking For?"
                    aria-label="Search">
            </div>
        </form>
    </div>
    <a href="#" class="cart d-lg-none ms-auto me-3" type="button" data-bs-toggle="modal"
        data-bs-target="#cartModal"><img src="{{ asset('assets/img/svg/bag.svg') }}" alt=""><span
            class="product-qty">1</span></a>
    <button class="navbar-toggler p-0" type="button" data-bs-toggle="collapse"
        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    Listings
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    More
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="add-listing.html">Add Listings</a></li>
                    <li><a class="dropdown-item" href="my-acc-dashboard.html">Dashboard</a></li>
                    <li><a class="dropdown-item" href="shop.html">Shop</a></li>
                </ul>
            </li>
            <li class="nav-item">
            </li>
        </ul>
        @guest
        <div class="mt-4 d-lg-none">
            <a href="{{ route('login')}}" class="btn btn-primary">Login</a>
            <a href="{{ route('login')}}" class="btn btn-light ms-3">Register</a>
        </div>
        @endguest
    </div>
    <div class="align-items-center d-none d-lg-flex">
        @guest
        <div class="d-flex align-items-center">
            <a class="custom-link" href="{{ route('login')}}">
                <span class="icon"><img src="{{ asset('assets/img/svg/user.svg') }}" alt=""></span>Login
            </a>
            <span class="mx-2 text-white">or</span>
            <a class="custom-link me-3" href="{{ route('login')}}">
                Register
            </a>
        </div>
        @endguest
        <a href="#" class="cart" type="button" data-bs-toggle="modal" data-bs-target="#cartModal"><img
                src="{{ asset('assets/img/svg/bag.svg') }}" alt=""><span class="product-qty">1</span></a>
        <a href="{{ route('add-listing')}}" class="btn btn-primary">Add Your Business</a>
    </div>
</nav>