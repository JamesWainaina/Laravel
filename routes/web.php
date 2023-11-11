<?php

use App\Http\Controllers\ListingController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Listing;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Common Resource Routes
// index -show all listings
//show -Show single listing
//create -Show form to create new listing
// store -store new listing
//edit - Show form to edit listing
// update -Update listing
//destroy- Delete listing

/*Route::get('/hello',function(){
    return response("<h1>hello World <h1>",200)
    ->header('Content-type','text/plain')
    ->header('foo','bar');
    
});

Route::get('/posts/{id}',function($id){
    return response('Post'.$id);
})-> where('id','[0-9]+');

Route::get('/search',function(Request $request){
    return $request->name . ' '. $request->city;

});*/

//All listings

Route::get('/',[ListingController::class,"index"]);



//show create form 
Route::get('/listings/create',
[ListingController::class,"create"]);

// Store listing Data
Route::post('/listings',
[ListingController::class,"store"]);

// Single listing
Route::get('/listings/{listing}',
[ListingController::class,"show"]);

