<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AthleteController;
use App\Http\Controllers\ProfileController;

/*
|--------------------------------------------------------------------------
| Frontend
|--------------------------------------------------------------------------
*/

Route::get('/', [AthleteController::class, 'index'])->name('home');

Route::get('/athlete/{athlete}', [AthleteController::class, 'show'])->name('athlete.show');

/*
|--------------------------------------------------------------------------
| Authentication Required
|--------------------------------------------------------------------------
*/

Route::middleware('auth')->group(function () {

    // Dashboard (dibutuhkan oleh Laravel Breeze)
    Route::get('/dashboard', function () {
        return redirect('/');
    })->name('dashboard');

    /*
    |--------------------------------------------------------------------------
    | Profile
    |--------------------------------------------------------------------------
    */

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');

    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');

    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    /*
    |--------------------------------------------------------------------------
    | Admin Athlete
    |--------------------------------------------------------------------------
    */

    Route::get('/admin', [AthleteController::class, 'dashboard'])->name('admin.index');

    Route::get('/admin/create', [AthleteController::class, 'create'])->name('admin.create');

    Route::post('/admin/store', [AthleteController::class, 'store'])->name('admin.store');

    Route::get('/admin/edit/{athlete}', [AthleteController::class, 'edit'])->name('admin.edit');

    Route::put('/admin/update/{athlete}', [AthleteController::class, 'update'])->name('admin.update');

    Route::delete('/admin/delete/{athlete}', [AthleteController::class, 'destroy'])->name('admin.delete');

});

require __DIR__.'/auth.php';