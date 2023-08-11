@extends('includes.layout')
@section('content')
<div class="main-content">
    <section class="hero">
        <div class="slider-wrapper">
            <div class="hero-slider">
                <div><img src="{{ asset('assets/img/jpg/slide-2.jpg') }}" alt=""></div>
                <div><img src="{{ asset('assets/img/jpg/slide-1.jpg') }}" alt=""></div>
            </div>
        </div>
        <div class="caption-wrapper">
            <div class="container">
                <h1 class="title">
                    Business Intermediate
                </h1>
                <h5 class="content">Find awesome places, beauty salon , real-estate, shops and jobs</h5>
                <div class="tabs-wrapper">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="events-tab" data-bs-toggle="tab"
                                data-bs-target="#events-tab-pane" type="button" role="tab"
                                aria-controls="events-tab-pane" aria-selected="true">Events</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="jobs-tab" data-bs-toggle="tab"
                                data-bs-target="#jobs-tab-pane" type="button" role="tab"
                                aria-controls="jobs-tab-pane" aria-selected="false">Jobs</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="beauty-tab" data-bs-toggle="tab"
                                data-bs-target="#beauty-tab-pane" type="button" role="tab"
                                aria-controls="beauty-tab-pane" aria-selected="false">Beauty & Fashion</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="real-state-tab" data-bs-toggle="tab"
                                data-bs-target="#real-state-tab-pane" type="button" role="tab"
                                aria-controls="real-state-tab-pane" aria-selected="false">Real Estate</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="services-tab" data-bs-toggle="tab"
                                data-bs-target="#services-tab-pane" type="button" role="tab"
                                aria-controls="services-tab-pane" aria-selected="false">Services</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="shops-tab" data-bs-toggle="tab"
                                data-bs-target="#shops-tab-pane" type="button" role="tab"
                                aria-controls="shops-tab-pane" aria-selected="false">Shops</button>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="events-tab-pane" role="tabpanel"
                            aria-labelledby="events-tab" tabindex="0">
                            <form action="">
                                <div class="input-group-wrapper">
                                    <div class="input-wrapper">
                                        <label for="inputText1" class="form-label">Where to Look?</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="inputText1">
                                            <a href=""><img src="{{ asset('assets/img/svg/user-location.svg') }}" alt=""></a>
                                        </div>
                                    </div>
                                    <div class="input-wrapper">
                                        <label for="select1" class="form-label">All Categories</label>
                                        <select class="form-select rev-select-box"
                                            aria-label="Default select example" id="select1">
                                            <option selected value="hide">All Categories</option>
                                            <option value="1">Night Club</option>
                                        </select>
                                    </div>
                                    <div class="input-wrapper">
                                        <label for="select2" class="form-label">Show events from</label>
                                        <select class="form-select rev-select-box"
                                            aria-label="Default select example" id="select2">
                                            <option value="1" selected>Any Day</option>
                                            <option value="2">Today</option>
                                            <option value="3">This Week</option>
                                            <option value="4">This Weekend</option>
                                            <option value="5">Next Week</option>
                                            <option value="6">Pick a DAte</option>
                                        </select>
                                    </div>
                                    <button type="submit" href="#" class="btn btn-primary">
                                        <span>
                                            <img src="{{ asset('assets/img/svg/search-light.svg') }}" alt="">
                                        </span>
                                        Search
                                    </button>
                                </div>
                            </form>
                        </div>
                        <div class="tab-pane fade" id="jobs-tab-pane" role="tabpanel" aria-labelledby="jobs-tab"
                            tabindex="0">
                            <form action="">
                                <div class="input-group-wrapper">
                                    <div class="input-wrapper">
                                        <label for="inputText2" class="form-label">Where to Look?</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="inputText2">
                                            <a href=""><img src="{{ asset('assets/img/svg/user-location.svg') }}" alt=""></a>
                                        </div>
                                    </div>
                                    <div class="input-wrapper">
                                        <label for="select3" class="form-label">Category</label>
                                        <select class="form-select rev-select-box"
                                            aria-label="Default select example" id="select3">
                                            <option value="1">BabySitter</option>
                                            <option value="2">Cleaning</option>
                                            <option value="3">Chef</option>
                                            <option value="4">Handyman</option>
                                        </select>
                                    </div>
                                    <div class="input-wrapper">
                                        <label for="inputText3" class="form-label">What are you looking
                                            for?</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="inputText3">
                                        </div>
                                    </div>
                                    <button type="submit" href="#" class="btn btn-primary">
                                        <span>
                                            <img src="{{ asset('assets/img/svg/search-light.svg') }}" alt="">
                                        </span>
                                        Search
                                    </button>
                                </div>
                            </form>
                        </div>
                        <div class="tab-pane fade" id="beauty-tab-pane" role="tabpanel"
                            aria-labelledby="beauty-tab" tabindex="0">
                            <form action="">
                                <div class="input-group-wrapper">
                                    <div class="input-wrapper">
                                        <label for="inputText4" class="form-label">Where to Look</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="inputText4">
                                            <a href=""><img src="{{ asset('assets/img/svg/user-location.svg') }}" alt=""></a>
                                        </div>
                                    </div>
                                    <div class="input-wrapper">
                                        <label for="select4" class="form-label">All Categories</label>
                                        <select class="form-select rev-select-box"
                                            aria-label="Default select example" id="select4">
                                            <option value="1">Farmer</option>
                                            <option value="2">Hair Salon</option>
                                        </select>
                                    </div>
                                    <div class="input-wrapper">
                                        <label for="inputText5" class="form-label">What are you looking
                                            for?</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="inputText5">
                                        </div>
                                    </div>
                                    <button type="submit" href="#" class="btn btn-primary">
                                        <span>
                                            <img src="{{ asset('assets/img/svg/search-light.svg') }}" alt="">
                                        </span>
                                        Search
                                    </button>
                                </div>
                            </form>
                        </div>
                        <div class="tab-pane fade" id="real-state-tab-pane" role="tabpanel"
                            aria-labelledby="real-state-tab" tabindex="0">
                            <form action="">
                                <div class="input-group-wrapper">
                                    <div class="input-wrapper">
                                        <label for="inputText6" class="form-label">Where to Look</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="inputText4">
                                            <a href=""><img src="{{ asset('assets/img/svg/user-location.svg') }}" alt=""></a>
                                        </div>
                                    </div>
                                    <div class="input-wrapper">
                                        <label for="select5" class="form-label">All Categories</label>
                                        <select class="form-select rev-select-box"
                                            aria-label="Default select example" id="select5">
                                            <option value="1">Farmer</option>
                                            <option value="2">Hair Salon</option>
                                        </select>
                                    </div>
                                    <div class="input-wrapper">
                                        <label for="inputText7" class="form-label">Price per month</label>
                                        <div class="slider-box">
                                            <input type="text" id="priceRange"
                                                onkeypress="this.style.width = ((this.value.length + 1) * 8) + 'px';">
                                            <div id="price-range" class="slider"></div>
                                        </div>
                                    </div>
                                    <button type="submit" href="#" class="btn btn-primary">
                                        <span>
                                            <img src="{{ asset('assets/img/svg/search-light.svg') }}" alt="">
                                        </span>
                                        Search
                                    </button>
                                </div>
                            </form>
                        </div>
                        <div class="tab-pane fade" id="services-tab-pane" role="tabpanel"
                            aria-labelledby="services-tab" tabindex="0">
                            <form action="">
                                <div class="input-group-wrapper">
                                    <div class="input-wrapper">
                                        <label for="inputText7" class="form-label">Where to Look?</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="inputText1">
                                        </div>
                                    </div>
                                    <div class="input-wrapper">
                                        <label for="select6" class="form-label">All Categories</label>
                                        <select class="form-select rev-select-box"
                                            aria-label="Default select example" id="select6">
                                            <option selected value="hide">Category</option>
                                            <option value="1">Hair Salon</option>
                                            <option value="2">Branding</option>
                                        </select>
                                    </div>
                                    <div class="input-wrapper">
                                        <label for="inputText8" class="form-label">Where to Look?</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="inputText8">
                                            <a href=""><img src="{{ asset('assets/img/svg/user-location.svg') }}" alt=""></a>
                                        </div>
                                    </div>
                                    <button type="submit" href="#" class="btn btn-primary">
                                        <span>
                                            <img src="{{ asset('assets/img/svg/search-light.svg') }}" alt="">
                                        </span>
                                        Search
                                    </button>
                                </div>
                            </form>
                        </div>
                        <div class="tab-pane fade" id="shops-tab-pane" role="tabpanel"
                            aria-labelledby="shops-tab" tabindex="0">
                            <form action="">
                                <div class="input-group-wrapper">
                                    <div class="input-wrapper">
                                        <label for="inputText9" class="form-label">Where to Look?</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="inputText9">
                                        </div>
                                    </div>
                                    <div class="input-wrapper">
                                        <label for="select7" class="form-label">All Categories</label>
                                        <select class="form-select rev-select-box"
                                            aria-label="Default select example" id="select7">
                                            <option selected value="hide">Category</option>
                                            <option value="1">No Categories here</option>
                                        </select>
                                    </div>
                                    <div class="input-wrapper">
                                        <label for="inputText10" class="form-label">Where to Look?</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="inputText10">
                                            <a href=""><img src="{{ asset('assets/img/svg/user-location.svg') }}" alt=""></a>
                                        </div>
                                    </div>
                                    <button type="submit" href="#" class="btn btn-primary">
                                        <span>
                                            <img src="{{ asset('assets/img/svg/search-light.svg') }}" alt="">
                                        </span>
                                        Search
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="business">
        <div class="container">
            <div class="main-title">
                <h1>Welcome To Business Intermediation</h1>
                <h5 class="lead">A one-stop listing directory platform that opens the door to the world of
                    Businesses</h5>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-3">
                    <a href="package.html">
                        <div class="card">
                            <img src="{{ asset('assets/img/svg/beauty.svg') }}" alt="" class="card-img">
                            <div class="card-body">
                                <h3 class="card-title">Beauty</h3>
                                <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                                    Porro, sint.</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-6 col-lg-3">
                    <a href="package.html">
                        <div class="card">
                            <img src="{{ asset('assets/img/svg/jobs.svg') }}" alt="" class="card-img">
                            <div class="card-body">
                                <h3 class="card-title">Jobs</h3>
                                <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                                    Porro, sint.</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-6 col-lg-3">
                    <a href="package.html">
                        <div class="card">
                            <img src="{{ asset('assets/img/svg/places.svg') }}" alt="" class="card-img">
                            <div class="card-body">
                                <h3 class="card-title">Places</h3>
                                <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                                    Porro, sint.</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-6 col-lg-3">
                    <a href="package.html">
                        <div class="card">
                            <img src="{{ asset('assets/img/svg/housing.svg') }}" alt="" class="card-img">
                            <div class="card-body">
                                <h3 class="card-title">Housing</h3>
                                <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                                    Porro, sint.</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-6 col-lg-3">
                    <a href="package.html">
                        <div class="card">
                            <img src="{{ asset('assets/img/svg/services.svg') }}" alt="" class="card-img">
                            <div class="card-body">
                                <h3 class="card-title">Services</h3>
                                <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                                    Porro, sint.</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-6 col-lg-3">
                    <a href="package.html">
                        <div class="card">
                            <img src="{{ asset('assets/img/svg/shops.svg') }}" alt="" class="card-img">
                            <div class="card-body">
                                <h3 class="card-title">Shops</h3>
                                <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                                    Porro, sint.</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-6 col-lg-3">
                    <a href="package.html">
                        <div class="card">
                            <img src="{{ asset('assets/img/svg/events.svg') }}" alt="" class="card-img">
                            <div class="card-body">
                                <h3 class="card-title">Events</h3>
                                <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                                    Porro, sint.</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-6 col-lg-3">
                    <a href="package.html">
                        <div class="card">
                            <img src="{{ asset('assets/img/svg/reataurants.svg') }}" alt="" class="card-img">
                            <div class="card-body">
                                <h3 class="card-title">Restaurants</h3>
                                <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                                    Porro, sint.</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section class="categories">
        <div class="container">
            <div class="main-title">
                <h1>Discover our top categories</h1>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-3">
                    <a href="">
                        <div class="img-wrapper">
                            <img src="{{ asset('assets/img/jpg/category-item.jpg') }}" alt="">
                            <div class="text-wrapper">
                                <i class="far fa-bookmark"></i>
                                <h3>Makeup</h3>
                                <p>No Listings</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-6 col-lg-3">
                    <a href="">
                        <div class="img-wrapper">
                            <img src="{{ asset('assets/img/jpg/category-item.jpg') }}" alt="">
                            <div class="text-wrapper">
                                <i class="far fa-bookmark"></i>
                                <h3>Makeup</h3>
                                <p>No Listings</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-6 col-lg-3">
                    <a href="">
                        <div class="img-wrapper">
                            <img src="{{ asset('assets/img/jpg/category-item.jpg') }}" alt="">
                            <div class="text-wrapper">
                                <i class="far fa-bookmark"></i>
                                <h3>Makeup</h3>
                                <p>No Listings</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-6 col-lg-3">
                    <a href="">
                        <div class="img-wrapper">
                            <img src="{{ asset('assets/img/jpg/category-item.jpg') }}" alt="">
                            <div class="text-wrapper">
                                <i class="far fa-bookmark"></i>
                                <h3>Makeup</h3>
                                <p>No Listings</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section class="recommended">
        <div class="container">
            <div class="main-title">
                <h1>Places we recommend you visit</h1>
                <h5 class="lead">Handpicked places by our team</h5>
            </div>
            <div class="recommended-slider">
                <div>
                    <div class="card">
                        <a href="#">
                            <img src="{{ asset('assets/img/webp/real-state-1.webp') }}" alt="" class="card-img">
                            <div class="card-body">
                                <img src="{{ asset('assets/img/jpg/job-1.jpg') }}" class="profile-pic" alt="">
                                <h3 class="card-title">Full stack developer</h3>
                                <p class="card-text">Edwardian picture house, screening mainstream films</p>
                                <div class="contact-wrapper">
                                    <h5 class="contact"><i class="fas fa-phone-alt"></i></span>+39 14 5214 22
                                    </h5>
                                    <h5 class="contact"><span><i class="fa fa-map-marker-alt"></i></span>Chivers
                                        Rd</h5>
                                </div>
                            </div>
                        </a>
                        <div class="card-footer">
                            <a class="category" href=""><span><i class="far fa-bookmark"></i></span>Part
                                Time</a>
                            <div class="category-controls">
                                <a href=""><i class="fas fa-search-plus"></i></a>
                                <a href=""><i class="far fa-heart"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="card">
                        <a href="#">
                            <img src="{{ asset('assets/img/webp/real-state-1.webp') }}" alt="" class="card-img">
                            <div class="card-body">
                                <img src="{{ asset('assets/img/jpg/job-1.jpg') }}" class="profile-pic" alt="">
                                <h3 class="card-title">Full stack developer</h3>
                                <p class="card-text">Edwardian picture house, screening mainstream films</p>
                                <div class="contact-wrapper">
                                    <h5 class="contact"><i class="fas fa-phone-alt"></i></span>+39 14 5214 22
                                    </h5>
                                    <h5 class="contact"><span><i class="fa fa-map-marker-alt"></i></span>Chivers
                                        Rd</h5>
                                </div>
                            </div>
                        </a>
                        <div class="card-footer">
                            <a class="category" href=""><span><i class="far fa-bookmark"></i></span>Part
                                Time</a>
                            <div class="category-controls">
                                <a href=""><i class="fas fa-search-plus"></i></a>
                                <a href=""><i class="far fa-heart"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="card">
                        <a href="#">
                            <img src="{{ asset('assets/img/webp/real-state-1.webp') }}" alt="" class="card-img">
                            <div class="card-body">
                                <img src="{{ asset('assets/img/jpg/job-1.jpg') }}" class="profile-pic" alt="">
                                <h3 class="card-title">Full stack developer</h3>
                                <p class="card-text">Edwardian picture house, screening mainstream films</p>
                                <div class="contact-wrapper">
                                    <h5 class="contact"><i class="fas fa-phone-alt"></i></span>+39 14 5214 22
                                    </h5>
                                    <h5 class="contact"><span><i class="fa fa-map-marker-alt"></i></span>Chivers
                                        Rd</h5>
                                </div>
                            </div>
                        </a>
                        <div class="card-footer">
                            <a class="category" href=""><span><i class="far fa-bookmark"></i></span>Part
                                Time</a>
                            <div class="category-controls">
                                <a href=""><i class="fas fa-search-plus"></i></a>
                                <a href=""><i class="far fa-heart"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="card">
                        <a href="#">
                            <img src="{{ asset('assets/img/webp/real-state-1.webp') }}" alt="" class="card-img">
                            <div class="card-body">
                                <img src="{{ asset('assets/img/jpg/job-1.jpg') }}" class="profile-pic" alt="">
                                <h3 class="card-title">Full stack developer</h3>
                                <p class="card-text">Edwardian picture house, screening mainstream films</p>
                                <div class="contact-wrapper">
                                    <h5 class="contact"><i class="fas fa-phone-alt"></i></span>+39 14 5214 22
                                    </h5>
                                    <h5 class="contact"><span><i class="fa fa-map-marker-alt"></i></span>Chivers
                                        Rd</h5>
                                </div>
                            </div>
                        </a>
                        <div class="card-footer">
                            <a class="category" href=""><span><i class="far fa-bookmark"></i></span>Part
                                Time</a>
                            <div class="category-controls">
                                <a href=""><i class="fas fa-search-plus"></i></a>
                                <a href=""><i class="far fa-heart"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="real-state">
        <div class="container">
            <div class="main-title">
                <h1>Real Estate</h1>
                <h5 class="lead">Looking for properties to rent?</h5>
            </div>
            <div class="real-state-slider">
                <div>
                    <a href="#">
                        <div class="card">
                            <div class="img-wrapper">
                                <img src="{{ asset('assets/img/webp/real-state-1.webp') }}" alt="" class="card-img">
                            </div>
                            <div class="card-body">
                                <h3 class="card-title">Lindo apto pra alugar em Boca Raton</h3>
                                <p class="card-text"> <span><i class="fas fa-map-marker-alt"></i></span> Popular
                                    Properties</p>
                                <a href="#" class="btn btn-primary">$563/month</a>
                            </div>
                            <div class="card-footer">
                                <div class="d-flex justify-content-between">
                                    <div class="d-flex align-items-center">
                                        <i class="fas fa-vector-square"></i>
                                        <p>1200 Sqft</p>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <i class="fas fa-layer-group"></i>
                                        <p>3 rooms</p>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <i class="fas fa-bed"></i>
                                        <p>1200 Bed</p>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <i class="fas fa-bath"></i>
                                        <p>2 Bath</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div>
                    <a href="#">
                        <div class="card">
                            <div class="img-wrapper">
                                <img src="{{ asset('assets/img/webp/real-state-1.webp') }}" alt="" class="card-img">
                            </div>
                            <div class="card-body">
                                <h3 class="card-title">Lindo apto pra alugar em Boca Raton</h3>
                                <p class="card-text"> <span><i class="fas fa-map-marker-alt"></i></span> Popular
                                    Properties</p>
                                <a href="#" class="btn btn-primary">$563/month</a>
                            </div>
                            <div class="card-footer">
                                <div class="d-flex justify-content-between">
                                    <div class="d-flex align-items-center">
                                        <i class="fas fa-vector-square"></i>
                                        <p>1200 Sqft</p>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <i class="fas fa-layer-group"></i>
                                        <p>3 rooms</p>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <i class="fas fa-bed"></i>
                                        <p>1200 Bed</p>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <i class="fas fa-bath"></i>
                                        <p>2 Bath</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div>
                    <a href="#">
                        <div class="card">
                            <div class="img-wrapper">
                                <img src="{{ asset('assets/img/webp/real-state-1.webp') }}" alt="" class="card-img">
                            </div>
                            <div class="card-body">
                                <h3 class="card-title">Lindo apto pra alugar em Boca Raton</h3>
                                <p class="card-text"> <span><i class="fas fa-map-marker-alt"></i></span> Popular
                                    Properties</p>
                                <a href="#" class="btn btn-primary">$563/month</a>
                            </div>
                            <div class="card-footer">
                                <div class="d-flex justify-content-between">
                                    <div class="d-flex align-items-center">
                                        <i class="fas fa-vector-square"></i>
                                        <p>1200 Sqft</p>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <i class="fas fa-layer-group"></i>
                                        <p>3 rooms</p>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <i class="fas fa-bed"></i>
                                        <p>1200 Bed</p>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <i class="fas fa-bath"></i>
                                        <p>2 Bath</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div>
                    <a href="#">
                        <div class="card">
                            <div class="img-wrapper">
                                <img src="{{ asset('assets/img/webp/real-state-1.webp') }}" alt="" class="card-img">
                            </div>
                            <div class="card-body">
                                <h3 class="card-title">Lindo apto pra alugar em Boca Raton</h3>
                                <p class="card-text"> <span><i class="fas fa-map-marker-alt"></i></span> Popular
                                    Properties</p>
                                <a href="#" class="btn btn-primary">$563/month</a>
                            </div>
                            <div class="card-footer">
                                <div class="d-flex justify-content-between">
                                    <div class="d-flex align-items-center">
                                        <i class="fas fa-vector-square"></i>
                                        <p>1200 Sqft</p>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <i class="fas fa-layer-group"></i>
                                        <p>3 rooms</p>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <i class="fas fa-bed"></i>
                                        <p>1200 Bed</p>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <i class="fas fa-bath"></i>
                                        <p>2 Bath</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section class="job-openings">
        <div class="container">
            <div class="main-title">
                <h1>Jop openings</h1>
                <h5 class="lead">Find job openings in London</h5>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-4">
                    <div class="card card-s4">
                        <a href="#">
                            <div class="info-wrapper">
                                <img src="{{ asset('assets/img/jpg/job-1.jpg') }}" alt="" class="card-img">
                                <div class="card-body">
                                    <h3 class="card-title">Full stack developer</h3>
                                    <div class="contact-wrapper">
                                        <h5 class="contact"><span><i
                                                    class="fa fa-map-marker-alt"></i></span>Chivers Rd</h5>
                                        <h5 class="contact"><i class="fas fa-phone-alt"></i></span>+39 14 5214
                                            22</h5>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <div class="card-footer">
                            <a class="category" href=""><span><i class="far fa-bookmark"></i></span>Part
                                Time</a>
                            <div class="category-controls">
                                <a href=""><i class="fas fa-search-plus"></i></a>
                                <a href=""><i class="far fa-heart"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card card-s4">
                        <a href="#">
                            <div class="info-wrapper">
                                <img src="{{ asset('assets/img/jpg/job-1.jpg') }}" alt="" class="card-img">
                                <div class="card-body">
                                    <h3 class="card-title">Full stack developer</h3>
                                    <div class="contact-wrapper">
                                        <h5 class="contact"><span><i
                                                    class="fa fa-map-marker-alt"></i></span>Chivers Rd</h5>
                                        <h5 class="contact"><i class="fas fa-phone-alt"></i></span>+39 14 5214
                                            22</h5>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <div class="card-footer">
                            <a class="category" href=""><span><i class="far fa-bookmark"></i></span>Part
                                Time</a>
                            <div class="category-controls">
                                <a href=""><i class="fas fa-search-plus"></i></a>
                                <a href=""><i class="far fa-heart"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card card-s4">
                        <a href="#">
                            <div class="info-wrapper">
                                <img src="{{ asset('assets/img/jpg/job-1.jpg') }}" alt="" class="card-img">
                                <div class="card-body">
                                    <h3 class="card-title">Full stack developer</h3>
                                    <div class="contact-wrapper">
                                        <h5 class="contact"><span><i
                                                    class="fa fa-map-marker-alt"></i></span>Chivers Rd</h5>
                                        <h5 class="contact"><i class="fas fa-phone-alt"></i></span>+39 14 5214
                                            22</h5>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <div class="card-footer">
                            <a class="category" href=""><span><i class="far fa-bookmark"></i></span>Part
                                Time</a>
                            <div class="category-controls">
                                <a href=""><i class="fas fa-search-plus"></i></a>
                                <a href=""><i class="far fa-heart"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="map d-none">
        <div class="map-wrapper">
            <div id="map"></div>
        </div>
    </section>
    <section class="cta">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <h1 class="title">Join Business Intermediation</h1>
                    <h3 class="lead">And never miss an opportunity to grow your Business!</h3>
                </div>
                <div class="col-md-5">
                    <div class="btn-wrapper">
                        <a href="" class="btn btn-outline">Add Listings</a>
                        <a href="" class="btn btn-outline">Be a Member</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection