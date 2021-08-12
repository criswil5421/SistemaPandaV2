<?php

use App\Http\Controllers\AsistenciaController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\PermisoController;
use App\Http\Controllers\PermisoRoleController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\TrabajadorController;
use App\Http\Controllers\TrabajoDetalleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VentaController;
use App\Http\Controllers\VentaDetalleController;
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

Route::middleware(['auth:sanctum', 'verified'])->get('/dash', function () {
    return view('dash.index');
})->name('dash');

Route::get('/dash/crud', function () {
    return view('crud.ventas');
});
Route::get('/dash/hola', function () {
    return view('crud.hola');
});
Route::get('/dash/crud/ventadetalle', function () {
    return view('crud.ventadetalle');
});


Route::resource('asistencia', AsistenciaController::class);
Route::get('asistencia/{asistencia}/destroy', [AsistenciaController::class, 'destroy'])->name('asistencia.destroy');

Route::resource('cliente', ClienteController::class);
Route::get('cliente/{cliente}/destroy', [ClienteController::class, 'destroy'])->name('cliente.destroy');

Route::resource('permiso', PermisoController::class);
Route::get('permiso/{permiso}/destroy', [PermisoController::class, 'destroy'])->name('permiso.destroy');

Route::resource('PermisoRole', PermisoRoleController::class);
Route::get('PermisoRole/{PermisoRole}/destroy', [PermisoRoleController::class, 'destroy'])->name('PermisoRole.destroy');

Route::resource('producto', ProductoController::class);
Route::get('producto/{producto}/destroy', [ProductoController::class, 'destroy'])->name('producto.destroy');

Route::resource('role', RoleController::class);
Route::get('role/{role}/destroy', [RoleController::class, 'destroy'])->name('role.destroy');

Route::resource('trabajador', TrabajadorController::class);
Route::get('trabajador/{trabajador}/destroy', [TrabajadorController::class, 'destroy'])->name('trabajador.destroy');

Route::resource('trabajodetalle', TrabajoDetalleController::class);
Route::get('trabajodetalle/{trabajodetalle}/destroy', [TrabajoDetalleController::class, 'destroy'])->name('trabajodetalle.destroy');

Route::resource('user', UserController::class);
Route::get('user/{user}/destroy', [UserController::class, 'destroy'])->name('user.destroy');

Route::resource('venta', VentaController::class);
Route::get('venta/{venta}/destroy', [VentaController::class, 'destroy'])->name('venta.destroy');

Route::resource('ventadetalle', VentaDetalleController::class);
Route::get('ventadetalle/{ventadetalle}/destroy', [VentaDetalleController::class, 'destroy'])->name('ventadetalle.destroy');