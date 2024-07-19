<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/admin', function () {
    return view('pages.admin.index');
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/post', function () {
    return view('welcome');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Cadastro - Sistemas Operacionais
Route::prefix('sistemas-operacionais')->group(function () {
    Route::name('operational.systems.')->group(function () {

        // Permissão: Visualizar
        Route::middleware(['allow:show'])->group(function () {
            Route::get('/', [OperationalSystemsController::class, 'index'])->name('index');
        });

        // Permissão: Criar
        Route::middleware(['allow:create'])->group(function () {
            Route::get('/adicionar', [OperationalSystemsController::class, 'create'])->name('create');
            Route::post('/adicionar', [OperationalSystemsController::class, 'store'])->name('store');
        });

        // Permissão: Editar
        Route::middleware(['allow:edit'])->group(function () {
            Route::get('/editar/{id}', [OperationalSystemsController::class, 'edit'])->name('edit');
            Route::put('/editar/{id}', [OperationalSystemsController::class, 'update'])->name('update');
        });

        // Permissão: Desabilitar
        Route::middleware(['allow:disable'])->group(function () {
            Route::get('/desabilitar/{id}', [OperationalSystemsController::class, 'destroy'])->name('destroy');
        }); 
    });
});

require __DIR__.'/auth.php';
