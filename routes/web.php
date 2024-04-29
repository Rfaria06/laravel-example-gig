<?php

// use Illuminate\Http\Request;

use App\Http\Controllers\ListingController;
use Illuminate\Support\Facades\Route;

/*
    |-------------------------------------------------------|
    |    Common Resource Routes                             |
    |-------------------------------------------------------|
    | index - Show all listings                             |
    | show - Show single listing                            |
    | create - Show form to create new listing              |
    | store - Store new listing                             |
    | edit - Show form to edit listing                      |
    | update - Update listing                               |
    | destroy - Delete listing                              |
    |-------------------------------------------------------|
*/

// All listings
Route::get('/', [ListingController::class, 'index']);


// Show create Form
Route::get("/listings/create", [ListingController::class, 'create']);

// Store listing
Route::post("/listings", [ListingController::class, 'store']);

// Route Model binding
// Automatically returns the 404 page if the listing doesnt exist
Route::get('/listings/{listing}', [ListingController::class, 'show']);

// --- Manual data fetching
// Route::get('/listings/{id}', function ($id) {
//     $listing = Listing::find($id);
//
//     if ($listing) {
//         return view('listing', [
//             'listing' => Listing::find($id)
//         ]);
//     } else {
//         abort('404');
//     }
// });

// Route::get('/hello', function () {
//     return response('<h1>Hello World!</h1>')
//         ->header('Content-Type', 'application/json')
//         ->header('foo', 'bar');
// });
//
// Route::get('/posts/{id}', function ($id) {
//     return response('Post ' . $id);
// })->where('id', '[0-9]+');
//
// Route::get('/search', function (Request $request) {
//     return $request->name . ' ' . $request->city;
// });
