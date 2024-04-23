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

// Route Model binding
// Automatically returns the 404 page if the listing doesnt exist
Route::get('/listings/{listing}', function (Listing $listing) {
    return view('listing', [
        'listing' => $listing
    ]);
});

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
