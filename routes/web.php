<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MealController;
use App\Http\Controllers\MealTypeController;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['adminProtectedPages', 'auth'])->group(function () {
    Route::view('admin-home', 'admin');
});


Route::get('addtype', [MealTypeController::class, 'add_type']);
Route::get('gettype', [MealTypeController::class, 'get_type']);

Route::get('addmeal', [MealController::class, 'add_meal']);
Route::get('choosemeal', [MealController::class, 'choose_meal']);
Route::get('range', [MealController::class, 'date_range']);