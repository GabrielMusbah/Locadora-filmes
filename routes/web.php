<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\RegisterClienteController;
use App\Http\Controllers\RegisterFilmeController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SelectFilmeController;

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
Route::group(['middleware' => 'auth'], function (){

    Route::get('/', [HomeController::class, 'show'])->name('home');

    Route::get('registerFilme', [RegisterFilmeController::class, 'showForm'])->name('registerFilme');
    Route::post('registerFilme', [RegisterFilmeController::class, 'register'])->name('registerFilme.post');

    Route::get('logout', [HomeController::class, 'logout'])->name('logout');

    Route::get('select', [SelectFilmeController::class, 'show'])->name('select');
    Route::get('select/{item}', [SelectFilmeController::class, 'select'])->name('remove');
    

});

Route::group(['middleware' => 'guest'], function (){

    Route::get('login', [LoginController::class, 'showForm'])->name('login');
    Route::post('login', [LoginController::class, 'login'])->name('login.post');

    Route::get('registerCliente', [RegisterClienteController::class, 'showForm'])->name('registerCliente');
    Route::post('registerCliente', [RegisterClienteController::class, 'register'])->name('registerCliente.post');

});