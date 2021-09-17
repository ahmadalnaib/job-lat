<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Listing;
use App\Models\Tag;
use Illuminate\Http\Request;

class CategorylistingController extends Controller
{
    public function index(Category $category)
    {
        $listings = $category->listings()->get();
        $tags = Tag::orderBy('name')->get();
       

        return view('listings.category', compact('listings', 'tags','category'));
    }
}
