<?php

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

Route::get('/', function () {
    $comics = config('comics');
    return view('homepage', [
        'comics' => $comics
    ]);
}) ->name('home');

Route::get('/comics/{id}', function ($id) {

    // aggiorno l'id con un valore posizionale
    $arrayIndex = $id - 1;

    $comics = config('comics');

    return view('comic', [
        "arrayIndex" => $arrayIndex,
        'comics' => $comics
    ]);
})->name('comic');

Route::get('/about-us', function () {
    return view('about-us');
}) ->name('about-us');

Route::get('/contact-us', function () {
    return view('contact-us');
}) ->name('contact-us');

