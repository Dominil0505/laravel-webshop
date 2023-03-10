<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Session;
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

Route::get('/login', function () {
    return view('login');
});


Route::post('/login', [UserController::class, 'login']);

Route::get('/', [ProductController::class, 'index']);

// átadjuk neki az ID ez alapján tudni fogja melyik sütiről van szó
Route::get('/detail/{id}', [ProductController::class, 'detail']);

Route::post('add_to_cart', [ProductController::class, 'addToCart']);

Route::get('/cart', [ProductController::class, 'showCart']);


// kijelentkezés
Route::get('/logout', function () {
    Session::forget('user');
    return redirect('login');
});
