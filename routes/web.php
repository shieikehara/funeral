<?php

use App\Http\Controllers\FuneralController;
use App\Http\Controllers\UserLoginController;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', [FuneralController::class, 'index'])->name('/');
Route::get('/delete', [FuneralController::class, 'delete_user'])->name('delete');
Route::get('/logout', [UserLoginController::class, 'logout'])->name('logout');
Route::get('/login', [UserLoginController::class, 'user_login'])->name('user_login');

Route::prefix('/menu')->group(function (){
    Route::get('/', [FuneralController::class, 'menu'])->name('menu');
    Route::post('/user', [UserLoginController::class, 'authenticate'])->name('user_menu');
    Route::get('/guest', [FuneralController::class, 'guestMenu'])->name('guest_menu');
    Route::get('/funeral', [FuneralController::class, 'funeral'])->name('funeral');
    Route::get('/change_food', [FuneralController::class, 'change_food'])->name('change_food');
    Route::get('/flower', [FuneralController::class, 'flower'])->name('flower');
    Route::get('/form', [FuneralController::class, 'form'])->name('form');
    Route::get('/new_funeral', [FuneralController::class, 'new_funeral'])->name('new_funeral');
    Route::get('/change_user', [FuneralController::class, 'change_user']);

    Route::prefix('complete')->group(function (){
        Route::post('/flower', [FuneralController::class, 'complete1']);
        Route::post('/flower/guest', [FuneralController::class, 'complete5'])->name('flower_guest');
        Route::post('/form', [FuneralController::class, 'complete2']);
        Route::post('/new_funeral', [FuneralController::class, 'complete3']);
        Route::post('/change_food', [FuneralController::class, 'complete4']);
    });
});
Route::get('/mypage', [FuneralController::class, 'mypage'])->name('mypage');
Route::get('/new_login', [FuneralController::class, 'new_login'])->name('new_login');
Route::post('/new_login_complete', [FuneralController::class, 'new_login_complete'])->name('new_login_complete');
Route::get('/change_pass', [FuneralController::class, 'change_pass']);
Route::get('/change_user', [FuneralController::class, 'change_user']);
Route::prefix('change_complete')->group(function(){
    Route::post('/pass', [FuneralController::class, 'change_complete'])->name('pass');
    Route::post('/user', [FuneralController::class, 'change_complete2'])->name('user');
});

