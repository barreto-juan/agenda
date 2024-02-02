<?php

use App\Http\Controllers\pacientesController;
use App\Http\Controllers\medicosController;
use App\Http\Controllers\especialidadesController;
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

Route::prefix('pacientes')->group(function () {
    Route::get('/', [pacientesController::class, 'index'])->name('pacientes-index');
    Route::get('/create', [pacientesController::class, 'create'])->name('pacientes-create');
    Route::post('/', [pacientesController::class, 'store'])->name('pacientes-store');
    Route::get('/{id}/edit', [pacientesController::class, 'edit'])->where('id', '[0-9]+')->name('pacientes-edit');
    Route::put('/{id}', [pacientesController::class, 'update'])->where('id', '[0-9]+')->name('pacientes-update');
    Route::get('/{id}/delete', [pacientesController::class, 'delete'])->where('id', '[0-9]+')->name('pacientes-delete');
    Route::delete('/{id}', [pacientesController::class, 'destroy'])->where('id', '[0-9]+')->name('pacientes-destroy');
});

Route::prefix('medicos')->group(function () {
    Route::get('/', [medicosController::class, 'index'])->name('medicos-index');
    Route::get('/create', [medicosController::class, 'create'])->name('medicos-create');
});

Route::prefix('especialidades')->group(function (){
    Route::get('/', [especialidadesController::class, 'index'])->name('especialidades-index');
});

Route::fallback(function(){
    return view('erros/erro');
});