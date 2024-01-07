<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\UsergController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home');
});

Route::prefix('/users')->name('users.')->group(function () {
    Route::get('/create', [UserController::class, 'create'])->name('create');
    Route::post('/store', [UserController::class, 'store'])->name('store');
    Route::get('/', [UserController::class, 'index'])->name('home');
    Route::get('/{id}', [UserController::class, 'edit'])->name('edit');
    Route::patch('/{id}', [UserController::class, 'update'])->name('update');
    Route::delete('/{id}', [UserController::class, 'destroy'])->name('delete');
});

Route::prefix('/userg')->name('userg.')->group(function () {
    Route::get('/create', [UsergController::class, 'create'])->name('create');
    Route::post('/store', [UsergController::class, 'store'])->name('store');
    Route::get('/', [UsergController::class, 'index'])->name('home');
    Route::get('/{id}', [UsergController::class, 'edit'])->name('edit');
    Route::patch('/{id}', [UsergController::class, 'update'])->name('update');
    Route::delete('/{id}', [UsergController::class, 'destroy'])->name('delete');
});




