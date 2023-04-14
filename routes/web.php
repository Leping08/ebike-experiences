<?php

use App\Http\Controllers\ContactController;
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

Route::get('/trails/legacy-trail', function () {
    return view('pages.trails.legacy');
})->name('trails.legacy-trail');

// Route::get('/contact-us', function () {
//     return view('pages.contact');
// })->name('contact');
