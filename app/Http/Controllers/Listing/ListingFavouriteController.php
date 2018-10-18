<?php

namespace App\Http\Controllers\Listing;

use App\{Area, Listing};
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use Image;

class ListingFavouriteController extends Controller
{
   public function __construct()
    {
        $this->middleware(['auth']);
    }

     public function index(Request $request)
    {
        $listings = $request->user()->favouriteListings()->paginate(10);
        $user = Auth::user();
        return view('user.listings.favourites.index', compact('listings', 'user'));
    }

 public function store(Request $request, Area $area, Listing $listing)
    {
        $request->user()->favouriteListings()->syncWithoutDetaching([$listing->id]);

        return back()->withSuccess('Listing added to favourites.');
    }

}
