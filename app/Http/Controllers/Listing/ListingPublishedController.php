<?php

namespace App\Http\Controllers\Listing;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use Image;

class ListingPublishedController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }

    public function index(Request $request)
    {
        $user = Auth::user(); 
        $listings = $request->user()->listings()->with(['area'])->isLive()->latestFirst()->paginate(4);

        return view('user.listings.published.index', compact('listings', 'user', 'image')); 
    }
}

