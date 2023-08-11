@extends('includes.layout')
@section('content')
<div class="main-content">
    <section class="package">
        <div class="container">
            <div class="main-title">
                <h1>Choose a Package</h1>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-4">
                    <div class="card">
                        <h3 class="card-title">BASIC</h3>
                        <img src="assets/img/png/package-1.png" alt="" class="card-img">
                        <div class="card-body">
                            <h3 class="pricing">$7.90</h3>
                            <ul class="features">
                                <li class="list-item">
                                    <p>One listing submission</p>
                                </li>
                                <li class="list-item">
                                    <p>Any listing type</p>
                                </li>
                                <li class="list-item">
                                    <p>90 days expiration</p>
                                </li>
                                <li class="list-item">
                                    <p>Usable for claiming</p>

                                </li>
                            </ul>
                            <a href="{{ route('create-listing') }}" class="btn btn-primary">Buy Package</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card">
                        <h3 class="card-title">PREMIUM</h3>
                        <img src="assets/img/png/package-2.png" alt="" class="card-img">
                        <div class="card-body">
                            <h3 class="pricing">$7.90</h3>
                            <ul class="features">
                                <li class="list-item">
                                    <p>One listing submission</p>
                                </li>
                                <li class="list-item">
                                    <p>Any listing type</p>
                                </li>
                                <li class="list-item">
                                    <p>90 days expiration</p>
                                </li>
                                <li class="list-item">
                                    <p>Usable for claiming</p>

                                </li>
                            </ul>
                            <a href="{{ route('create-listing') }}" class="btn btn-primary">Buy Package</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card">
                        <h3 class="card-title">ADVANCED</h3>
                        <img src="assets/img/png/package-3.png" alt="" class="card-img">
                        <div class="card-body">
                            <h3 class="pricing">$7.90</h3>
                            <ul class="features">
                                <li class="list-item">
                                    <p>One listing submission</p>
                                </li>
                                <li class="list-item">
                                    <p>Any listing type</p>
                                </li>
                                <li class="list-item">
                                    <p>90 days expiration</p>
                                </li>
                                <li class="list-item">
                                    <p>Usable for claiming</p>

                                </li>
                            </ul>
                            <a href="{{ route('create-listing') }}" class="btn btn-primary">Buy Package</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection