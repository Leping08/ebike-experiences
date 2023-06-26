<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('pages.home');
})->name('home');

Route::get('/trails', function () {
    return view('pages.trails.index');
})->name('trails.index');

Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

Route::get('/trails/sarasota/legacy-trail', function () {
    return view('pages.trails.sarasota.legacy');
})->name('trails.sarasota.legacy-trail');

Route::get('/trails/sarasota/gateway-to-the-beaches', function () {
    return view('pages.trails.sarasota.gateway-to-the-beaches');
})->name('trails.sarasota.gateway-to-the-beaches');

Route::get('/trails/venice/venice-train-depot', function () {
    return view('pages.trails.venice.train-depot');
})->name('trails.venice.train-depot');

Route::get('/sitemap', function () {
    return Redirect::to(asset('/sitemap.xml'));
})->name('sitemap');

// Route::get('/contact-us', function () {
//     return view('pages.contact');
// })->name('contact');
