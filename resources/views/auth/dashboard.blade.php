@extends('includes.layout')
@section('content')
<div class="main-content">
    <section class="acc-dashboard">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center flex-wrap w-100 mb-4">
                <h5 class="results">Hello, <span>{{ Session::get('username') }}</span></h5>
                <div class="input-group-wrapper dark">
                    <div class="input-wrapper">
                        <select class="form-select rev-select-box" aria-label="Default select example"
                            id="select1">
                            <option selected value="hide">Filter by Listings</option>
                            <option value="1">Night Club</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-3">
                    <a href="#">
                        <div class="card card-s2">
                            <div class="bg-anim bg-dradient-1"></div>
                            <img src="assets/img/svg/published.svg" alt="" class="card-img">
                            <div class="card-body">
                                <h2 class="status">0</h2>
                                <h3 class="card-title">Published Listings</h3>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-6 col-lg-3">
                    <a href="#">
                        <div class="card card-s2">
                            <div class="bg-anim bg-dradient-2"></div>
                            <img src="assets/img/svg/pending.svg" alt="" class="card-img">
                            <div class="card-body">
                                <h2 class="status">0</h2>
                                <h3 class="card-title">Pending Listings</h3>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-6 col-lg-3">
                    <a href="#">
                        <div class="card card-s2">
                            <div class="bg-anim bg-dradient-3"></div>
                            <img src="assets/img/svg/promotion.svg" alt="" class="card-img">
                            <div class="card-body">
                                <h2 class="status">0</h2>
                                <h3 class="card-title">Active Promotions</h3>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-6 col-lg-3">
                    <a href="#">
                        <div class="card card-s2">
                            <div class="bg-anim bg-dradient-4"></div>
                            <img src="assets/img/svg/visits.svg" alt="" class="card-img">
                            <div class="card-body">
                                <h2 class="status">0</h2>
                                <h3 class="card-title">Visits this week</h3>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4">
                    <div class="card card-s3">
                        <div class="card-body">
                            <h3 class="card-title"><img src="assets/img/svg/views.svg" alt="" class="me-2">Views
                            </h3>
                            <div class="d-flex justify-content-between">
                                <div class="text-center">
                                    <h3 class="status">0</h3>
                                    <p class="duration">Last 24 hours</p>
                                </div>
                                <div class="text-center">
                                    <h3 class="status">0</h3>
                                    <p class="duration">Last 7 days</p>
                                </div>
                                <div class="text-center">
                                    <h3 class="status">0</h3>
                                    <p class="duration">Last 30 days</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card card-s3">
                        <div class="card-body">
                            <h3 class="card-title"><img src="assets/img/svg/unique-views.svg" alt=""
                                    class="me-2">Unique Views</h3>
                            <div class="d-flex justify-content-between">
                                <div class="text-center">
                                    <h3 class="status">0</h3>
                                    <p class="duration">Last 24 hours</p>
                                </div>
                                <div class="text-center">
                                    <h3 class="status">0</h3>
                                    <p class="duration">Last 7 days</p>
                                </div>
                                <div class="text-center">
                                    <h3 class="status">0</h3>
                                    <p class="duration">Last 30 days</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card card-s3">
                        <div class="card-body">
                            <h3 class="card-title"><img src="assets/img/svg/button-clicks.svg" alt=""
                                    class="me-2">Button clicks</h3>
                            <div class="card-text">No click stats recorded yet.</div>
                        </div>
                    </div>
                    <div class="card card-s3">
                        <div class="card-body">
                            <h3 class="card-title"><img src="assets/img/svg/devices.svg" alt=""
                                    class="me-2">Devices</h3>
                            <div class="card-text">No click stats recorded yet.</div>
                        </div>
                    </div>
                    <div class="card card-s3">
                        <div class="card-body">
                            <h3 class="card-title"><img src="assets/img/svg/countries.svg" alt=""
                                    class="me-2">Top Countries</h3>
                            <div class="card-text">No click stats recorded yet.</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="card card-s3">
                        <div class="card-body">
                            <h3 class="card-title"><img src="assets/img/svg/visits-ico.svg" alt=""
                                    class="me-2">Visits</h3>
                            <div class="chart-warpper">
                                <canvas id="myChart" style="width:100%;"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="card card-s3">
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item border-0">
                                <h3 class="accordion-header" id="headingOne">
                                    <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                        aria-expanded="false" aria-controls="collapseOne">
                                        <img src="assets/img/svg/refrres.svg" alt="" class="me-2">
                                        Top Referrers
                                    </button>
                                </h3>
                                <div id="collapseOne" class="accordion-collapse collapse"
                                    aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p class="card-text">No click stats recorded yet.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card card-s3">
                                <div class="card-body">
                                    <div class="card-title"> <img src="assets/img/svg/platforms.svg" alt=""
                                            class="me-2"> Top Platforms</div>
                                    <p class="card-text">No click stats recorded yet.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card card-s3">
                                <div class="card-body">
                                    <div class="card-title"> <img src="assets/img/svg/browsers.svg" alt=""
                                            class="me-2">Top Browsers</div>
                                    <p class="card-text">No click stats recorded yet.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection