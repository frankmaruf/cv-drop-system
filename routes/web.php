<?php

use App\Http\Controllers\PartialController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [UserController::class, 'index'])->name('index');

Route::name('users.')->prefix('users')->group(function () {
    Route::get('/create', [UserController::class, 'create'])->name('create');
    Route::post('/store', [UserController::class, 'store'])->name('store');
    Route::get('/', [UserController::class, 'index'])->name('index');
    Route::get('/{id}', [UserController::class, 'show'])->name('show');
    Route::get('{id}/delete',[UserController::class,'destroy'])->name('delete');
    Route::get('{id}/users_cv',[UserController::class,'UserController@getUserCV'])->name('cv');
});
Route::name('partials.')->prefix('partials')->group(function () {
    Route::get('/education', [PartialController::class, 'education'])->name('education');
    Route::get('/training', [PartialController::class, 'training'])->name('training');
    Route::get('/district', [PartialController::class, 'district'])->name('district');
    Route::get('/thana', [PartialController::class, 'thana'])->name('thana');
});
