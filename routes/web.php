<?php

// use Illuminate\Http\Request;

use App\Http\Controllers\ListingController;
use App\Http\Controllers\UserController;
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
Route::get("/listings/create", [ListingController::class, 'create'])
    ->middleware('auth');

// Store listing
Route::post("/listings", [ListingController::class, 'store'])
    ->middleware('auth');

// Manage Listings
Route::get('/listings/manage', [ListingController::class, 'manage'])
    ->middleware('auth');

// Show Edit form
Route::get('/listings/{listing}/edit', [ListingController::class, 'edit'])
    ->middleware('auth');

// Update Listing
Route::put('listings/{listing}', [ListingController::class, 'update'])
    ->middleware('auth');

// Delete listing
Route::delete('listings/{listing}', [ListingController::class, 'destroy'])
    ->middleware('auth');

// Route Model binding
// Automatically returns the 404 page if the listing doesn't exist
Route::get('/listings/{listing}', [ListingController::class, 'show']);

// Show Register create form
Route::get('/register', [UserController::class, 'create'])
    ->middleware('guest');

// Create new User
Route::post('/users', [UserController::class, 'store']);

// Log User Out
Route::post('/logout', [UserController::class, 'logout']);

// Show Login form
Route::get('/login', [UserController::class, 'login'])
    ->name('login')
    ->middleware('guest');

// Log in User
Route::post('/users/authenticate', [UserController::class, 'authenticate']);

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
