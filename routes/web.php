<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RequisicioneController;
use App\Http\Controllers\CotizacioneController;
use App\Http\Controllers\ProveedoreController;
use App\Http\Controllers\PartidaController;

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




Auth::routes(['register'=>false, 'reset'=>false]);

Route::get('/home', [RequisicioneController::class, 'index'])->name('home');

//PDF
Route::get('pdf', [RequisicioneController::class, 'pdf'])->name('requisiciones.pdf');


Route::resource('cotizaciones', App\Http\Controllers\CotizacioneController::class)->middleware('auth');
Route::resource('partidas', App\Http\Controllers\PartidaController::class)->middleware('auth');
Route::resource('proveedores', App\Http\Controllers\ProveedoreController::class)->middleware('auth');
Route::resource('requisiciones', App\Http\Controllers\RequisicioneController::class)->middleware('auth');

Route::group(['middleware' => 'auth'], function (){
    Route::get('/', [RequisicioneController::class, 'index'])->name('home');
});