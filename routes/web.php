<?php

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
    return view('welcome');
});

Route::get('/registro1', [App\Http\Controllers\HomeController::class, 'index1'])->name('registro1');
Route::get('/graficas', [App\Http\Controllers\HomeController::class, 'graficas'])->name('graficas');
Route::get('/elementos', [App\Http\Controllers\HomeController::class, 'elementos'])->name('elementos');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

/*|--------------------------------------------------------------------------
|Usuario
|--------------------------------------------------------------------------*/
Route::get('/usuario', [App\Http\Controllers\UserController::class, 'index'])->name('index.usuario');
Route::get('/create/usuario', [App\Http\Controllers\UserController::class, 'create'])->name('create.usuario');
Route::post('/store/usuario', [App\Http\Controllers\UserController::class, 'store'])->name('store.usuario');
Route::get('/edit/usuario/{id}', [App\Http\Controllers\UserController::class, 'edit'])->name('edit.usuario');
Route::patch('/update/usuario/{id}', [App\Http\Controllers\UserController::class, 'update'])->name('update.usuario');

Route::patch('/usuario/update/password/{id}', [App\Http\Controllers\UserController::class, 'update_usuario_password'])->name('update_usuario_password.usuario');
Route::get('/create/usuario/{id}', [App\Http\Controllers\UserController::class, 'GetSucursalAgainstMainCatEdit']);

/*|--------------------------------------------------------------------------
|Empresas
|--------------------------------------------------------------------------*/
Route::get('/empresas', [App\Http\Controllers\EmpresaController::class, 'index'])->name('index.empresa');
Route::get('/create/empresa', [App\Http\Controllers\EmpresaController::class, 'create'])->name('create.empresa');
Route::post('/store/empresa', [App\Http\Controllers\EmpresaController::class, 'store'])->name('store.empresa');
Route::get('/edit/empresa/{id}', [App\Http\Controllers\EmpresaController::class, 'edit'])->name('edit.empresa');
Route::patch('/update/empresa/{id}', [App\Http\Controllers\EmpresaController::class, 'update'])->name('update.empresa');

/*|--------------------------------------------------------------------------
|Sucursales
|--------------------------------------------------------------------------*/
Route::get('/sucursales', [App\Http\Controllers\SucursalController::class, 'index'])->name('index.sucursal');
Route::get('/create/sucursal', [App\Http\Controllers\SucursalController::class, 'create'])->name('create.sucursal');
Route::post('/store/sucursal', [App\Http\Controllers\SucursalController::class, 'store'])->name('store.sucursal');
Route::get('/edit/sucursal/{id}', [App\Http\Controllers\SucursalController::class, 'edit'])->name('edit.sucursal');
Route::patch('/update/sucursal/{id}', [App\Http\Controllers\SucursalController::class, 'update'])->name('update.sucursal');

