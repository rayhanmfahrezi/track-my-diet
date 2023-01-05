<?php

use App\Http\Controllers\FoodController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TodayFoodController;
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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/dashboard', [FoodController::class, 'all'])->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/dashboard/food/{id}', [FoodController::class, 'single']);

Route::get('/dashboard/search', [FoodController::class, 'search']);

Route::get('/makanan', [FoodController::class, 'all']);
Route::get('/like/{id}', [FoodController::class, 'like']);
Route::get('/save/{id}', [FoodController::class, 'save']);
Route::get('/unsave/{id}', [FoodController::class, 'unsave']);

Route::get('/user-diet', [UserDietController::class, 'all']);

// Route::get('/today-foods', function () {
//     return view('today_foods');
// })->name('today_foods');

Route::get('/today-foods', [TodayFoodController::class, 'date']);



require __DIR__ . '/auth.php';
