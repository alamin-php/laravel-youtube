<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Example\FirstController;
use App\Http\Controllers\FirstController as FController;
use App\Http\Controllers\PhotoController;

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
    return view('welcome', ['name'=>'Bangladesh']);
});

Route::get('/test', function(){
   Hunter::taxCalculate();
});

Route::get('/test_controller', FirstController::class);
Route::get('/test_invok', FirstController::class);

Route::view('/contact', 'contact');
Route::post('/contact/send', [FController::class, 'sendContact'])->name('contact.send');

Route::get('/country', function(){
    return view('country');
})->middleware('country')->name('country');

Route::get('user', function(){
    return view('user');
})->middleware(['user'])->name('user');

Route::resource('/photos', PhotoController::class);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
