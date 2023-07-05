<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;


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

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/car/create', [CarController::class,'create'])->name('car.create');

Route::post('/car/store', [CarController::class, 'store'])->name('car.store');

Route::get('/car/index', [CarController::class,'index'])->name('car.index');

Route::get('/car/show/{car}', [CarController::class, 'show'])->name('car.show');

Route::get('/car/edit/{car}', [CarController::class, 'edit'])->name('car.edit');

Route::put('/car/update/{car}', [CarController::class, 'update'])->name('car.update');

Route::delete('/car/delete/{car}', [CarController::class, 'delete'])->name('car.delete');






