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
/*Route::get('/{lang}', function ($lang = 'en') {
    App::setlocale($lang);
    Session::put('locale', $lang);
    return view('welcome');
})->name('home');*/

//USER
Route::resource('users', UserController::class);



//JETSTREAM
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

//TESTS
Route::get('/user/profile/edit', function(){
    return view('user');
})->name('adminUser');

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

<<<<<<< HEAD
/*Route::get('/admin/list', function(){
    
    return view('listUsers', ['users'=>$users]);
})->name('listUsers');*/
=======
//UPLOAD
Route::post('/upload-file', [UploadController::class, 'fileUpload'])->name('fileUpload');
>>>>>>> 7f633b8a1e4745a730b18d5e726a9088c2f98e69
