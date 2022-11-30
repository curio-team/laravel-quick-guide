<?php

use App\Http\Controllers\PagesController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [PagesController::class, 'viewHomePage'])->name('home');

Route::get('/cars', [PagesController::class, 'getAllCars'])->name('cars');
Route::get('/add-car', [PagesController::class, 'addCar'])->name('add-car');
Route::post('/add-car', [PagesController::class, 'processNewCar'])->name('process-add-car');
Route::get('/edit-car/{id}', [PagesController::class, 'editCar'])->name('edit-car');
Route::post('/edit-car/{id}', [PagesController::class, 'processEditCar'])->name('process-edit-car');
Route::get('/delete-car/{id}', [PagesController::class, 'deleteCar'])->name('delete-car');

require __DIR__.'/auth.php';
