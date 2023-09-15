<?php

use App\Http\Controllers\CarsController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FeaturesController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SpecsController;
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

Route::get('/', [PagesController::class, 'home'])->name('home');
Route::get('/cars', [PagesController::class, 'cars'])->name('cars');



Route::middleware(['auth'])->group(function () {
    Route::get('/userdashboard', [DashboardController::class, 'userdashboard'])->name('userdashboard');
});



Route::prefix('admin/')->middleware(['auth','isadmin'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
  
   Route::get('/cars', [CarsController::class, 'index'])->name('cars.index');
    Route::get('/cars/create', [CarsController::class, 'create'])->name('cars.create');
    Route::post('/cars/store', [CarsController::class, 'store'])->name('cars.store');
    Route::get('/cars/{cars}/edit', [CarsController::class, 'edit'])->name('cars.edit');
    Route::post('/cars/{cars}/update', [CarsController::class, 'update'])->name('cars.update');
    Route::post('/cars/delete', [CarsController::class, 'delete'])->name('cars.delete');

    Route::get('/specs', [SpecsController::class, 'index'])->name('specs.index');
    Route::get('/specs/create', [SpecsController::class, 'create'])->name('specs.create');
    Route::post('/specs/store', [SpecsController::class, 'store'])->name('specs.store');
    Route::get('/specs/{specs}/edit', [SpecsController::class, 'edit'])->name('specs.edit');
    Route::post('/specs/{specs}/update', [SpecsController::class, 'update'])->name('specs.update');
    Route::post('/specs/delete', [SpecsController::class, 'delete'])->name('specs.delete');

    Route::get('/features', [FeaturesController::class, 'index'])->name('features.index');
    Route::get('/features/create', [FeaturesController::class, 'create'])->name('features.create');
    Route::post('/features/store', [FeaturesController::class, 'store'])->name('features.store');
    Route::get('/features/edit/{$id}', [FeaturesController::class, 'edit'])->name('features.edit');
    Route::post('/features/{id}', [FeaturesController::class, 'update'])->name('features.update');

    Route::post('/features/delete', [FeaturesController::class, 'delete'])->name('features.delete');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
