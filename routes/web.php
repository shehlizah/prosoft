<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Mail\ContactUs;
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

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/clients', function () {
    return view('clients');
});

Route::get('/services', function () {
    return view('services');
});
Route::get('/portfolio', function () {
    return view('portfolio');
});
Route::get('/team', function () {
    return view('team');
});

// Route::get('/contact', function () {
//     return view('contact');
// });

// if not given path above 
// Route::get('/contact', 'App\Http\Controllers\ContactController@getContact');

Route::get('/contact', [ContactController::class,'getContact']);

// Route::post('/contact', [ContactController::class,'saveContact']);
Route::post('/contact',[ContactController::class,'saveContact'])->name('send.email');

// Route::post('/contact',  function (Request $request) {
//     Mail::send(new ContactMail($request));
//     return redirect('/');
    
// });



