<?php


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MineralTypeController;
use App\Http\Controllers\ApplicationController;


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

Route::post('/mineraltypes', [MineralTypeController::class,'store']);
Route::get('/mineraltypes',[MineralTypeController::class,'show']);
Route::view('/testing','test');
Route::post('edit/{id}',[MineralTypeController::class,'update']);
Route::get('mineraltypeupdate/{id}',[MineralTypeController::class,'edit']);
Route::get('/mineraltypedelete/{id}', [MineralTypeController::class, 'destroy']);

Route::get('/application',[ApplicationController::class, 'index'])->name('application');
Route::post('application_add',[ApplicationController::class, 'store']);
Route::get('/application_edit/{id}', [ApplicationController::class, 'edit']);
Route::put('/application_update/{id}', [ApplicationController::class, 'update']);
Route::get('/application_delete/{id}', [ApplicationController::class, 'destroy']);

Route::get('/permittee', [App\Http\Controllers\PermitteeController::class, 'index'])->name('permittee');

Route::post('permitte_add', [App\Http\Controllers\PermitteeController::class, 'store']);

Route::get('/edit-permittee/{id}', [App\Http\Controllers\PermitteeController::class, 'edit']);

Route::put('/update-permittee/{id}', [App\Http\Controllers\PermitteeController::class, 'update']);

Route::get('/delete-permittee/{id}', [App\Http\Controllers\PermitteeController::class, 'destroy']);


Route::get('/tenement', [App\Http\Controllers\MiningTenementPermitController::class, 'index'])->name('tenement');

Route::post('tenement_add', [App\Http\Controllers\MiningTenementPermitController::class, 'store']);

Route::get('/edit-tenement/{id}', [App\Http\Controllers\MiningTenementPermitController::class, 'edit']);

Route::put('/update-tenement/{id}', [App\Http\Controllers\MiningTenementPermitController::class, 'update']);

Route::get('/delete-tenement/{id}', [App\Http\Controllers\MiningTenementPermitController::class, 'destroy']);



Route::get('/transportation', [App\Http\Controllers\ModeofTransportationController::class, 'index'])->name('transportation');

Route::post('transportation_add', [App\Http\Controllers\ModeofTransportationController::class, 'store']);

Route::get('/edit-transportation/{id}', [App\Http\Controllers\ModeofTransportationController::class, 'edit']);

Route::post('/update-transportation/{id}', [App\Http\Controllers\ModeofTransportationController::class, 'update']);

Route::get('/delete-transportation/{id}', [App\Http\Controllers\ModeofTransportationController::class, 'destroy']);


Route::get('/violation', [App\Http\Controllers\ViolationController::class, 'index'])->name('violation');

Route::post('violation_add',[App\Http\Controllers\ViolationController::class, 'store']);

Route::get('edit-violation/{id}',[App\Http\Controllers\ViolationController::class, 'edit']);

Route::post('update-violation/{id}',[App\Http\Controllers\ViolationController::class, 'update']);

Route::get('/delete-violation/{id}', [App\Http\Controllers\ViolationController::class, 'destroy']);

