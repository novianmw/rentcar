<?php

use App\Http\Controllers\DetailController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RentController;
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

Route::get('/', [HomeController::class, 'index']); //DONE CHECK
Route::get('/about', function() {
    return view('about', [
        'title' => 'ABOUT | Broom.id',
    ]); //DONE CHECK
});
Route::get('/faq', [FaqController::class, 'index']); //DONE CHECK
Route::get('/faq/{category:slug}', [FaqController::class, 'show']); //DONE CHECK
Route::get('/rent', [RentController::class, 'index']); //DONE CHECK
Route::get('/detail', [DetailController::class, 'show']); //DONE CHECK




Route::get('/laravel', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

// Route::prefix('admin')->group(function () {
//     Route::get('/admin', function () {
//         return view('admin.login');
//     });
// });