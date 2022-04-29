<?php

use App\Http\Controllers\FasaController;
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

Route::get('/', function() {
    return view('auth.login');
});

Route::get("/auth.reset.password", function() {
    return view('auth.password-reset');
});

Route::get('auth.confirm.password', function() {
    return view('auth.password-confirm');
});

Route::get('/top', [FasaController::class, "topPage"]);

Route::get('/comments', function(){
    return view('pages.comments');
});

Route::get('/post.edit', function(){
    return view('pages.post.edit');
});