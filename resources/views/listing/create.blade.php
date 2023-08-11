@extends('includes.layout')
@section('content')
<div class="main-content">
    <section class="business">
        <div class="container">
            <div class="main-title">
                <h1>Select Business Type</h1>
                <h5 class="lead">What type of business would you like to add?</h5>
            </div>
            <div class="row">
                @foreach($categories as $category)
                <div class="col-md-6 col-lg-3">
                    <a href="{{ route('package') }}">
                        <div class="card">
                            <img src="{{asset('storage/'.$category->src)}}" alt="" class="card-img">
                            <div class="card-body">
                                <h3 class="card-title">{{ $category->name }}</h3>
                            </div>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </section>
</div>
@endsection