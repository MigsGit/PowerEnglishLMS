<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

Route::view('/', 'main');
Route::controller(UserController::class)->group(function () {
    Route::post('login', 'login')->name('login');
    Route::post('save_user_info', 'saveUserInfo')->name('save_user_info');
    Route::get('check_session','check_session');
    Route::get('logout','logout');
});


