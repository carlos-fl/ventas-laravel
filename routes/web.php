<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\VentasController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/productos/guardar/formulario', [ProductosController::class, 'showForm'])->name('producto.guardar.form');
Route::post('/productos/guardar', [ProductosController::class,'saveProduct'])->name('producto.guardar');
Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/productos', [ProductosController::class,'showProducts'])->name('productos');

Route::get('/ventas', [VentasController::class, 'showVentas'])->name('ventas');
Route::get('/ventas/guardar/formulario', [VentasController::class,'redirectToVentasForm'])->name('ventas.form');
Route::post('/ventas/guardar', [VentasController::class, 'saveVenta'])->name('ventas.guardar');