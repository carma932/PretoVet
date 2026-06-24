<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MascotasController;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\CitasController;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    // ===== USUARIOS =====
    Route::get('/users/index', [UserController::class, 'index'])
        ->name('users.index');
    Route::patch('/users/{user}/disable', [UserController::class, 'disable'])
        ->name('users.disable');
    Route::patch('/users/{user}/enable', [UserController::class, 'enable'])
        ->name('users.enable');
    Route::get('/users/create', [UserController::class, 'create'])
        ->name('users.create');
    Route::post('/users/store', [UserController::class, 'store'])
        ->name('users.store');
    Route::get('/users/edit/{codigo}', [UserController::class, 'edit'])
        ->name('users.edit');
    Route::put('/users/update/{codigo}', [UserController::class, 'update'])
        ->name('users.update');

    // ===== MASCOTAS =====
    Route::get('/mascotas/index', [MascotasController::class, 'index'])
        ->name('mascotas.index');
    Route::get('/mascotas/create', [MascotasController::class, 'create'])
        ->name('mascotas.create');
    Route::post('/mascotas/store', [MascotasController::class, 'store'])
        ->name('mascotas.store');
    Route::get('/mascotas/edit/{codigo}', [MascotasController::class, 'edit'])
        ->name('mascotas.edit');
    Route::put('/mascotas/update/{codigo}', [MascotasController::class, 'update'])
        ->name('mascotas.update');
    Route::patch('/mascotas/{mascota}/disable', [MascotasController::class, 'disable'])
        ->name('mascotas.disable');
    Route::patch('/mascotas/{mascota}/enable', [MascotasController::class, 'enable'])
        ->name('mascotas.enable');

    // ===== PRODUCTOS (TIENDA) =====
    Route::get('/productos/index', [ProductosController::class, 'index'])
        ->name('productos.index');
    Route::get('/productos/create', [ProductosController::class, 'create'])
        ->name('productos.create');
    Route::post('/productos/store', [ProductosController::class, 'store'])
        ->name('productos.store');
    Route::get('/productos/edit/{codigo}', [ProductosController::class, 'edit'])
        ->name('productos.edit');
    Route::put('/productos/update/{codigo}', [ProductosController::class, 'update'])
        ->name('productos.update');
    Route::patch('/productos/{producto}/disable', [ProductosController::class, 'disable'])
        ->name('productos.disable');
    Route::patch('/productos/{producto}/enable', [ProductosController::class, 'enable'])
        ->name('productos.enable');

        // ===== CITAS =====
    Route::get('/citas/index', [CitasController::class, 'index'])
        ->name('citas.index');
    Route::get('/citas/create', [CitasController::class, 'create'])
        ->name('citas.create');
    Route::post('/citas/store', [CitasController::class, 'store'])
        ->name('citas.store');
    Route::get('/citas/edit/{codigo}', [CitasController::class, 'edit'])
        ->name('citas.edit');
    Route::put('/citas/update/{codigo}', [CitasController::class, 'update'])
        ->name('citas.update');
    Route::patch('/citas/{cita}/cancelar', [CitasController::class, 'cancelar'])
        ->name('citas.cancelar');
});