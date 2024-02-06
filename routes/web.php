<?php

use App\Http\Controllers\pacientesController;
use App\Http\Controllers\medicosController;
use App\Http\Controllers\especialidadesController;
use App\Http\Controllers\consultasController;
use Illuminate\Support\Facades\Route;

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


Route::view('/', 'index')->name('index');

Route::prefix('pacientes')->group(function () {
    Route::get('/', [pacientesController::class, 'index'])->name('pacientes-index');
    Route::get('/create', [pacientesController::class, 'create'])->name('pacientes-create');
    Route::post('/', [pacientesController::class, 'store'])->name('pacientes-store');
    Route::get('/{id}/edit', [pacientesController::class, 'edit'])->where('id', '[0-9]+')->name('pacientes-edit');
    Route::put('/{id}', [pacientesController::class, 'update'])->where('id', '[0-9]+')->name('pacientes-update');
    Route::delete('/{id}', [pacientesController::class, 'destroy'])->where('id', '[0-9]+')->name('pacientes-destroy');
});

Route::prefix('medicos')->group(function () {
    Route::get('/', [medicosController::class, 'index'])->name('medicos-index');
    Route::get('/create', [medicosController::class, 'create'])->name('medicos-create');
    Route::post('/', [medicosController::class, 'store'])->name('medicos-store');
    Route::get('/{id}/edit', [medicosController::class, 'edit'])->where('id', '[0-9]+')->name('medicos-edit');
    Route::put('/{id}', [medicosController::class, 'update'])->where('id', '[0-9]+')->name('medicos-update');
    Route::delete('/{id}', [medicosController::class, 'destroy'])->where('id', '[0-9]+')->name('medicos-destroy');
});

Route::prefix('consultas')->group(function () {
    Route::get('/', [consultasController::class, 'index'])->name('consultas-index');
    Route::get('/create', [consultasController::class, 'create'])->name('consultas-create');
    Route::post('/', [consultasController::class, 'store'])->name('consultas-store');
    Route::get('/{id}/edit', [consultasController::class, 'edit'])->where('id', '[0-9]+')->name('consultas-edit');
    Route::put('/{id}', [consultasController::class, 'update'])->where('id', '[0-9]+')->name('consultas-update');
    Route::delete('/{id}', [consultasController::class, 'destroy'])->where('id', '[0-9]+')->name('consultas-destroy');
});

Route::prefix('especialidades')->group(function (){
    Route::get('/', [especialidadesController::class, 'index'])->name('especialidades-index');
});

Route::fallback(function(){
    return view('erros/erro');
});