<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArchivosController;
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('archivos', [ArchivosController::class, 'store'])->name('archivos.store');
Route::get('archivosy', [ArchivosController::class, 'inicio'])->name('mostrar.mostrar');
Route::get('mostrar/{id}', [ArchivosController::class, 'mostrar'])->name('mostrar.mostrar2');
Route::delete('mostrar', [ArchivosController::class, 'destroy'])->name('archivos.destroy');
Route::delete('mostrar/{producto}', [ArchivosController::class, 'destroy'])->name('archivos.destroy');