<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/permittee', [App\Http\Controllers\PermitteeController::class, 'index'])->name('permittee');

Route::get('/violation', [App\Http\Controllers\ViolationController::class, 'index'])->name('violation');

Route::post('permitte_add', [App\Http\Controllers\PermitteeController::class, 'store']);

Route::get('/edit-permittee/{id}', [App\Http\Controllers\PermitteeController::class, 'edit']);

Route::put('/update-permittee/{id}', [App\Http\Controllers\PermitteeController::class, 'update']);

Route::get('/delete-permittee/{id}', [App\Http\Controllers\PermitteeController::class, 'destroy']);

Route::post('/search', [App\Http\Controllers\PermitteeController::class, 'search']);