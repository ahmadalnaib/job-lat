<?php

use App\Http\Controllers\CategorylistingController;
use App\Http\Controllers\CityListingController;
use App\Http\Controllers\ListingController;
use App\Models\Category;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',[ListingController::class,'index'])->name('listings.index');
Route::get('/new',[ListingController::class,'create'])->name('listings.create');
Route::post('/new',[ListingController::class,'store'])->name('listings.store');

Route::get('/dashboard', function (\Illuminate\Http\Request $request) {
    return view('dashboard', [
        'listings' => $request->user()->listings
    ]);
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';


Route::get('/{listing}',[ListingController::class,'show'])->name('listings.show');

Route::get('/{listing}/apply',[ListingController::class,'apply'])->name('listings.apply');


Route::get('/categories/{category}',[CategorylistingController::class,'index'])->name('categories.jobs');


Route::get('/cities/{city}',[CityListingController::class,'index'])->name('city.jobs');
