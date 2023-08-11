@extends('includes.layout')
@section('content')
<div class="main-content">
    <section class="explore">
        <div class="container">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                @foreach($categories as $key => $category)
                <li class="nav-item" role="presentation">
                    <button class="nav-link {{$key==0 ? 'active':'' }}" id="tab-{{$category->id}}-" data-bs-toggle="tab" data-bs-target="#tab-{{$category->id}}" type="button" role="tab"
                    aria-controls="tab-{{$category->id}}" aria-selected="true">{{ $category->name }}</button>
                </li>
                @endforeach
            </ul>
        </div>
        <div class="tab-content my-md-5" id="myTabContent">
            @foreach($categories as $key => $category)
            <div class="tab-pane fade show active" id="tab-{{$category->id}}" role="tabpanel" aria-labelledby="tab-{{$category->id}}"
                tabindex="0">
                <div class="row">
                    <div class="col-lg-6 col-xl-3">
                        <ul class="nav nav-tabs  custom-nav" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="efilter-tab" data-bs-toggle="tab"
                                    data-bs-target="#efilter-tab-pane" type="button" role="tab"
                                    aria-controls="efilter-tab-pane" aria-selected="true">Events</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="ecategory-tab" data-bs-toggle="tab"
                                    data-bs-target="#ecategory-tab-pane" type="button" role="tab"
                                    aria-controls="ecategory-tab-pane" aria-selected="false">Jobs</button>
                            </li>
                        </ul>
                        <div class="tab-content" id="innertabs">
                            <div class="tab-pane fade show active" id="efilter-tab-pane" role="tabpanel"
                                aria-labelledby="eevents-tab tabindex=" 0">
                                <div class="custom-sidebar p-md-3">
                                    <form action="">
                                        <div class="input-group-wrapper">
                                            <div class="input-wrapper">
                                                <label for="inputText1" class="form-label">Where to
                                                    Look?</label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control" id="inputText1">
                                                </div>
                                            </div>
                                            <div class="input-wrapper">
                                                <label for="select1" class="form-label">Categories</label>
                                                <select class="form-select rev-select-box"
                                                    aria-label="Default select example" id="select1">
                                                    <option selected value="hide">All Categories</option>
                                                    <option value="1">Night Club</option>
                                                </select>
                                            </div>

                                            <div class="input-wrapper">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="enterhour">
                                                <label class="form-check-label" for="enterhour">
                                                    Enter hours
                                                </label>
                                            </div>
                                            <div class="input-wrapper">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="allday">
                                                <label class="form-check-label" for="allday">
                                                    Open all day
                                                </label>
                                            </div>
                                            <div class="input-wrapper">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="closed">
                                                <label class="form-check-label" for="closed">
                                                    Closed all day
                                                </label>
                                            </div>
                                            <div class="input-wrapper">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="appointment">
                                                <label class="form-check-label" for="appointment">
                                                    By appointment only
                                                </label>
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
                                            <div class="btn-wrapper d-flex flex-column gap-2">
                                                <button class="btn btn-light">Reset</button>
                                                <button type="submit" href="#" class="btn btn-primary">
                                                    <span>
                                                        <img src="assets/img/svg/search-light.svg" alt="">
                                                    </span>
                                                    Search
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="tab-pane fade show active" id="ecategory-tab-pane" role="tabpanel"
                                aria-labelledby="eevents-tab tabindex=" 1">
                                <a href="">
                                    <div class="img-wrapper">
                                        <img src="assets/img/jpg/category-item.jpg" alt="">
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
                    <div class="col-lg-6 col-xl-3">
                        <div class="custom-sidebar p-md-3">
                            @foreach($listings as $lt => $list)
                            @if($list->category_id==$category->id)
                            @php $img=$list->logo; @endphp
                            <div class="card card-s4">
                                <a href="#">
                                    <div class="info-wrapper">
                                        <img src="{{ asset('storage/img/'.$img) }}" alt="" class="card-img">
                                        <div class="card-body">
                                            <h3 class="card-title">{{ $list->title ? $list->title : '' }}</h3>
                                            <div class="contact-wrapper">
                                                <h5 class="contact"><span><i
                                                            class="fa fa-map-marker-alt"></i></span>{{ $list->location ? $list->location : '' }}
                                                </h5>
                                                <br>
                                                <h5 class="contact"><i class="fas fa-phone-alt"></i></span>{{ $list->phone ? $list->phone : '' }}</h5>
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
                            @endif
                            @endforeach
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="map-wrapper">
                            <div id="map"></div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </section>
</div>
@endsection