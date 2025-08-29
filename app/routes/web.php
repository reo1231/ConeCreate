<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\Authenticate;


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
    return view('welcome');
});

/*ログイン画面ルート定義*/
Route::get('/login', function () {
    return view('auth.login');
});



// 新規ユーザー登録画面のルート
Route::get('/register', [App\Http\Controllers\Auth\RegisterController::class, 'showRegistrationForm'])->name('register');

// ユーザー登録処理のルート
Route::post('/register', [App\Http\Controllers\Auth\RegisterController::class, 'register']);

/*パスワード忘れ画面ルート定義*/
Route::get('/password/reset', function () {
    return view('auth.password_reset');
});

/*loginController*/
Route::post('/login', [App\Http\Controllers\Auth\LoginController::class, 'login'])
->name('login');

Route::middleware(['auth'])->group(function () {
    Route::get('/home', function () {
        return view('auth.home');
    });
});


