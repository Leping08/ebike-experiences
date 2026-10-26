<?php

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
})->name('home');

Route::get('/trails', function () {
    return view('pages.trails.index');
})->name('trails.index');

Route::get('/trails/sarasota/legacy-trail', function () {
    return view('pages.trails.sarasota.legacy');
})->name('trails.sarasota.legacy-trail');

Route::get('/trails/sarasota/gateway-to-the-beaches', function () {
    return view('pages.trails.sarasota.gateway-to-the-beaches');
})->name('trails.sarasota.gateway-to-the-beaches');

Route::get('/trails/venice/venice-train-depot', function () {
    return view('pages.trails.venice.train-depot');
})->name('trails.venice.train-depot');

Route::get('/trails/sarasota/ringling-bridge', function () {
    return view('pages.trails.sarasota.ringling-bridge');
})->name('trails.sarasota.ringling-bridge');

Route::get('/sitemap', function () {
    return Redirect::to(asset('/sitemap.xml'));
})->name('sitemap');

// Vapor doesn't upload *.webmanifest files to the asset CDN, so serve it from the app domain
Route::get('/site.webmanifest', function () {
    return response()->json([
        'name' => config('app.seo_name'),
        'short_name' => config('app.seo_name'),
        'icons' => [
            ['src' => asset('/android-chrome-192x192.png'), 'sizes' => '192x192', 'type' => 'image/png'],
            ['src' => asset('/android-chrome-512x512.png'), 'sizes' => '512x512', 'type' => 'image/png'],
        ],
        'theme_color' => '#ffffff',
        'background_color' => '#ffffff',
        'display' => 'standalone',
    ], headers: ['Content-Type' => 'application/manifest+json']);
})->name('webmanifest');

// Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

// Route::get('/contact-us', function () {
//     return view('pages.contact');
// })->name('contact');
