<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use Session;
use App\Models\Listing;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;

class ListingController extends Controller
{
    public function __construct(){

    }

    public function addListing(){
        $categories=Category::all();

        return view('listing.create',compact('categories'));
    }

    public function package(){
        return view('listing.package');
    }

    public function createListing(){
        $categories=Category::all();
        return view('listing.add',compact('categories'));
    }

    public function storeListing(Request $request){
        $logo_path = $request->file('logo')->store('image', 'public');
        $cover_path = $request->file('cover')->store('image', 'public');
        $gallery_path = $request->file('gallery')->store('image', 'public');
        $data = Listing::create([
            'user_id'=>Auth::User()->id,
            'title'=>$request->title,
            'tag_line'=>$request->tag_line,
            'description'=>$request->description,
            'logo'=>$logo_path,
            'cover'=>$cover_path,
            'gallery'=>$gallery_path,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'website'=>$request->website,
            'social'=>$request->social,
            'url'=>$request->url,
            'timezone'=>$request->timezone,
            'location'=>$request->location,
            'category_id'=>$request->category_id,
            'tags'=>$request->tags,
            'range'=>$request->range,
            'product'=>$request->product,
            'jobs'=>$request->jobs,
            'events'=>$request->events,
            'related'=>$request->related,
            'from_date'=>date('Y-m-d',strtotime($request->from_date)),
            'to_date'=>date('Y-m-d',strtotime($request->to_date)),
        ]);

        return redirect("/all-listings")->withSuccess('Login details are not valid');
    }

    public function allListings(){
        $categories=Category::all();
        $listings=Listing::where('user_id','!=',Auth::User()->id)->get();
        return view('listing.view',compact('categories','listings'));
    }
}
