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

Route::get('/finder/all', function () {
    $users = \App\Models\User::all();
    return view('finder', ['users'=>$users]);
})->name('finder');

//LOCALIZATION
//Route::resource('language', );
Route::get('/en', 'LangController@changeEn')->name('homeEn');
Route::get('/es', 'LangController@changeEs')->name('homeEs');

//USER
Route::resource('users', UserController::class);

//BAND
Route::resource('bandcont', BandController::class);

// Perfiles de usuario
Route::get('/user/{id}', [ 'as' => 'users.showProfile', 'uses' => 'UserController@showProfile']);
//Llevar a perfil de banda
Route::get('/bandas/{id}', [ 'as' => 'bands.showBands', 'uses' => 'BandController@showBands']);

//JETSTREAM
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

//TESTS
Route::get('/user/profile/edit', function(){
    return view('user');
})->name('adminUser');

//Band test
Route::get('/bands/all', function(){
    $bands = \App\Models\Bands::all();
    $users = \App\Models\User::all();
    return view('bands', compact('bands', 'users'));
})->name('bands');

//ADMIN
Route::get('/admin/profile', function () {
    $users = \App\Models\User::all();
    return view('admin', ['users'=>$users]);
})->name('admin');

//ADVANCED SEARCH FINDER
Route::get('/find/all', function(){
    $users = \App\Models\User::all();
    return view('finder', ['users'=>$users]);
})->name('finder');
// ESTO FUNCIONA BIEN DE
Route::get('/find/{instrument}/{music}', 'UserController@show')->name('advfilter');

//UPLOAD
// Route::post('/upload-file', [UploadController::class, 'fileUpload'])->name('fileUpload');
