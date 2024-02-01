<?php

use App\Http\Controllers\pacientesController;
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
    Route::delete('/{id}', [pacientesController::class, 'destroy'])->where('id', '[0-9]+')->name('pacientes-destroy');
});

Route::fallback(function(){
    return view('erros/erro');
});