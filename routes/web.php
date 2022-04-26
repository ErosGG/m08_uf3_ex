<?php

use App\Http\Controllers\CampController;
use App\Http\Controllers\CityController;
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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', [CampController::class, 'index'])->name('index');


Route::get('/camps', [CampController::class, 'index'])->name('camps.index');
Route::get('/camps/create', [CampController::class, 'create'])->name('camps.create');
Route::post('/camps', [CampController::class, 'store'])->name('camps.store');
Route::get('/camps/{camp}', [CampController::class, 'show'])->name('camps.show');
Route::get('/camps/{camp}/edit', [CampController::class, 'edit'])->name('camps.edit');
Route::put('/camps/{camp}', [CampController::class, 'update'])->name('camps.update');
Route::delete('/camps/{camp}', [CampController::class, 'destroy'])->name('camps.destroy');


Route::get('/cities', [CityController::class, 'index'])->name('cities.index');
Route::get('/cities/create', [CityController::class, 'create'])->name('cities.create');
Route::post('/cities', [CityController::class, 'store'])->name('cities.store');
Route::get('/cities/{city}', [CityController::class, 'show'])->name('cities.show');
Route::get('/cities/{city}/edit', [CityController::class, 'edit'])->name('cities.edit');
Route::put('/cities/{city}', [CityController::class, 'update'])->name('cities.update');
Route::delete('/cities/{city}', [CityController::class, 'destroy'])->name('cities.destroy');

