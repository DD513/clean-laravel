<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\DrinksController;
use App\Http\Controllers\DrinkMenuController;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('drinks/menu', [DrinkMenuController::class, 'index'])->name('drinks.menu');
Route::get('drinks/edit/{id}', [DrinkMenuController::class, 'edit'])->name('drinks.edit');




require __DIR__ . '/auth.php';
