<?php
use Illuminate\Support\Facades\Http;
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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/location', [App\Http\Controllers\LocationController::class, 'index'])->name('location:list');
Route::get('/mentors', [App\Http\Controllers\MentorController::class, 'index'])->name('mentor:list');
Route::get('/staff', [App\Http\Controllers\StafController::class, 'index'])->name('staff:list');
// Route::get('/lokasi/create',[App\Http\Controllers\LokasiController::class, 'create'])->name('lokasi:create');
// Route::post('/lokasi/create',[App\Http\Controllers\LokasiController::class, 'store'])->name('lokasi:store');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
