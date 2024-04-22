<?php

// use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Listing;

// All listings
Route::get('/', function () {
    return view('listings', [
        'heading' => 'Latest Listings',
        'listings' => Listing::all()
    ]);
});

Route::get('/listings/{id}', function($id) {
    return view('listing', [
        'listing' => Listing::find($id)
    ]);
});

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
