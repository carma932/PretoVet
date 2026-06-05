<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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
    //mascotas
    Route::get('/mascotas/index', [App\Http\Controllers\MascotasController::class, 'index'])
        ->name('mascotas.index');
});
