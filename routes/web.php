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

//MAIN
Route::get('/', function () {
    return view('welcome');
})->name('welcome');

//LOCALIZATION
Route::get('/{lang}', function ($lang = 'en') {
    App::setlocale($lang);
    Session::put('locale', $lang);
    return view('welcome');
})->name('home');

//JETSTREAM
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

//TEST
Route::get('/user/profile', function () {
    $users = \App\Models\User::where('id', '1')->get();
    return view('user', ['allUsers' => $users]);
})->name('user');