<?php

namespace App\Http\Controllers;

use App\Area;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Jobs\UserViewedListing;
use App\Http\Requests\StoreListingFormRequest;

class HomeController extends Controller
{
 
  
    public function index()
    {  
       $areas = Area::get()->toTree();


        return view('home', compact('areas'));
    }
}
