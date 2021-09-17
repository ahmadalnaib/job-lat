<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Listing;
use App\Models\Tag;
use App\Models\City;
use Illuminate\Http\Request;

class CityListingController extends Controller
{

    public function index(City $city)
    {
        $listings=$city->listings()->get();
        $tags=Tag::orderBy('name')->get();
       
        

        return view('listings.city',compact('listings','tags','city'));

    }
}
