@extends('includes.layout')
@section('content')
<div class="main-content">
    <section class="listing-details">
        <div class="container">
            <div class="main-title">
                <h1>Your listing details</h1>
            </div>
            <form method="POST" action="{{ route('listing.add') }}" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-8 offset-md-2">
                        <div class="card">
                            <div class="card-body">
                                <h3 class="card-title">General</h3>
                                <div class="input-group-wrapper">
                                    <div class="input-wrapper">
                                        <label for="title" class="form-label">Title</label>
                                        <input type="text" class="form-control" id="title"
                                            placeholder="Name this listing" name="title">
                                    </div>
                                    <div class="input-wrapper">
                                        <label for="tagline" class="form-label">Tagline</label>
                                        <input type="text" class="form-control" id="tagline"
                                            placeholder="Say something catchy!" name="tag_line">
                                    </div>
                                    <div class="input-wrapper">
                                        <label for="floatingTextarea2">Description</label>
                                        <textarea class="form-control" placeholder="Leave a comment here"
                                            id="floatingTextarea2" name="description" style="height: 100px"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <h3 class="card-title">Images</h3>
                                <div class="input-group-wrapper">
                                    <div class="input-wrapper">
                                        <label for="logo" class="form-label">Logo</label>
                                        <label for="logo" class="custom-file-uploder">
                                            <span>Upload file here</span>
                                            <span class="lead">Maximum file size: 256 MB.</span>
                                        </label>
                                        <input type="file" class="form-control d-none" id="logo"
                                            placeholder="Name this listing" name="logo">
                                    </div>
                                    <div class="input-wrapper">
                                        <label for="cover-img" class="form-label">Cover Image</label>
                                        <label for="cover-img" class="custom-file-uploder">
                                            <span>Upload file here</span>
                                            <span class="lead">Maximum file size: 256 MB.</span>
                                        </label>
                                        <input type="file" class="form-control d-none" id="cover-img"
                                            placeholder="Name this listing" name="cover">
                                    </div>
                                    <div class="input-wrapper">
                                        <label for="logo" class="form-label">Gallery Images (optional)</label>
                                        <label for="gallery" class="custom-file-uploder">
                                            <span>Upload file here</span>
                                            <span class="lead">Maximum file size: 256 MB.</span>
                                        </label>
                                        <input type="file" class="form-control d-none" id="gallery"
                                            placeholder="Name this listing" name="gallery">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <h3 class="card-title">Contact Information</h3>
                                <div class="input-group-wrapper">
                                    <div class="input-wrapper">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="email" class="form-control" id="email"
                                            placeholder="Your email address" name="email">
                                    </div>
                                    <div class="input-wrapper">
                                        <label for="phone-number" class="form-label">Phone number</label>
                                        <input type="number" class="form-control" id="phone-number"
                                            placeholder="Your phone number" name="phone">
                                    </div>
                                    <div class="input-wrapper">
                                        <label for="web-url" class="form-label">Website (optional)</label>
                                        <input type="url" class="form-control" id="web-url" placeholder="Website url" name="website">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <h3 class="card-title">Social Networks</h3>
                                <div class="input-group-wrapper">
                                    <div class="d-flex align-items-center gap-3">
                                        <div class="input-wrapper">
                                            <label for="select1" class="form-label">Social Networks (optional)</label>
                                            <select class="form-select rev-select-box"
                                                aria-label="Default select example" id="select1" name="social">
                                                <option selected value="hide">Select Network</option>
                                                <option value="1">Facebook</option>
                                                <option value="2">Twitter</option>
                                                <option value="3">Instagram</option>
                                                <option value="4">Youtube</option>
                                                <option value="5">Snapchat</option>
                                                <option value="6">Thumblr</option>
                                                <option value="7">Reddit</option>
                                                <option value="8">Linkedin</option>
                                                <option value="9">Pinterest</option>
                                                <option value="10">Deviantacrt</option>
                                                <option value="11">VKontake</option>
                                                <option value="12">Soundcloud</option>
                                                <option value="13">Website</option>
                                                <option value="14">Other</option>
                                            </select>
                                        </div>
                                        <div class="input-wrapper">
                                            <label for="url" class="form-label">Enter URL</label>
                                            <input type="email" class="form-control" id="url"
                                                placeholder="Enter URL" name="url">
                                        </div>
                                    </div>
                                </div>
                                <button class="btn btn-light text-center w-100">Add</button>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <h3 class="card-title">Work hours</h3>
                                <div class="input-group-wrapper">
                                    <div class="input-wrapper d-flex gap-2 flex-wrap">
                                        <a href="#" class="btn btn-light">Mon</a>
                                        <a href="#" class="btn btn-light">Tue</a>
                                        <a href="#" class="btn btn-light">Wed</a>
                                        <a href="#" class="btn btn-light">Thu</a>
                                        <a href="#" class="btn btn-light">Fri</a>
                                        <a href="#" class="btn btn-light">Sat</a>
                                        <a href="#" class="btn btn-light">Sun</a>
                                    </div>
                                    <div class="d-lg-flex align-items-center justify-content-md-between">
                                        <div class="input-wrapper">
                                            <input class="form-check-input" type="checkbox" value="" id="enterhour">
                                            <label class="form-check-label" for="enterhour">
                                                Enter hours
                                            </label>
                                        </div>
                                        <div class="input-wrapper">
                                            <input class="form-check-input" type="checkbox" value="" id="allday">
                                            <label class="form-check-label" for="allday">
                                                Open all day
                                            </label>
                                        </div>
                                        <div class="input-wrapper">
                                            <input class="form-check-input" type="checkbox" value="" id="closed">
                                            <label class="form-check-label" for="closed">
                                                Closed all day
                                            </label>
                                        </div>
                                        <div class="input-wrapper">
                                            <input class="form-check-input" type="checkbox" value="" id="appointment">
                                            <label class="form-check-label" for="appointment">
                                                By appointment only
                                            </label>
                                        </div>
                                    </div>
                                    <div class="input-wrapper">
                                        <label for="select1" class="form-label">Tiemzone</label>
                                        <select class="form-select rev-select-box"
                                            aria-label="Default select example" id="timezone" name="timezone">
                                            <option selected value="0">Timezone</option>
                                            <option value="1">Africa/Abidjan</option>
                                            <option value="2">Africa/Accra</option>
                                        </select>
                                    </div>
                                    <div class="input-wrapper">
                                        <label for="inputText1" class="form-label">Location</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="inputText1" placeholder="e.g. 'London'" name="location">
                                            <a href=""><img src="assets/img/svg/user-location.svg" alt=""></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <h3 class="card-title">Listing details</h3>
                                <div class="input-group-wrapper">
                                    <div class="input-wrapper">
                                        <label for="category" class="form-label">Category</label>
                                        <select class="form-select rev-select-box"
                                            aria-label="Default select example" id="category" name="category_id">
                                            @foreach($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="input-wrapper">
                                        <label for="tags" class="form-label">Select tags</label>
                                        <input type="text" class="form-control" id="tags" placeholder="e.g. 'London'" name="tags">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <h3 class="card-title">Other</h3>
                                <div class="input-group-wrapper">
                                    <div class="input-wrapper">
                                        <label for="range" class="form-label">Price Range (optional)</label>
                                        <select class="form-select rev-select-box"
                                            aria-label="Default select example" id="range" name="range">
                                            <option selected value="1">Select and option</option>
                                            <option value="2">$</option>
                                            <option value="3">$$</option>
                                            <option value="4">$$$</option>
                                        </select>
                                    </div>
                                    <div class="input-wrapper">
                                        <label for="product" class="form-label">Products (optional)</label>
                                        <input type="text" class="form-control" id="product" placeholder="Select product'" name="product">
                                    </div>
                                    <div class="input-wrapper">
                                        <label for="tags" class="form-label">Choose Jobs (optional)</label>
                                        <input type="text" class="form-control" id="tags" placeholder="Select listing" name="jobs">
                                    </div>
                                    <div class="input-wrapper">
                                        <label for="listing" class="form-label">Choose Events (optional)</label>
                                        <input type="text" class="form-control" id="listing" placeholder="Select listing" name="events">
                                    </div>
                                    <div class="input-wrapper">
                                        <label for="listing" class="form-label">Related Listing (optional)</label>
                                        <select class="form-select rev-select-box"
                                            aria-label="Default select example" id="listing" name="related">
                                            <option selected value="1">Select listing</option>
                                            <option value="2">No result found</option>
                                        </select>
                                    </div>
                                    <div class="input-wrapper">
                                        <label for="listing" class="form-label">Restaurant Menu (optional)</label>
                                        <button class="btn btn-light">Add item</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <h3 class="card-title">Random Card</h3>
                                <div class="d-flex align-items-center gap-2">
                                    <div class="input-wrapper">
                                        <label for="from" class="form-label">From</label>
                                        <input type="text" id="from" class="datepicker" placeholder="Click to set date" name="from_date">
                                    </div>
                                    <div class="input-wrapper">
                                        <label for="to" class="form-label">To</label>
                                        <input type="text" id="to" class="datepicker" placeholder="Click to set date" name="to_date">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Submit Listing</button>
                    </div>
                </div>
            </form>
        </div>
    </section>
</div>
@endsection