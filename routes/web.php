<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;


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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[FrontController::class,'index'])->name('home');
Route::get('/about',[FrontController::class,'about'])->name('about');
Route::get('/show',[FrontController::class,'show'])->name('show');
Route::get('/models',[FrontController::class,'models'])->name('models');
Route::get('/models2',[FrontController::class,'models2'])->name('models2');
Route::post('/pageant-registration', [FrontController::class, 'pageant_registration_store'])->name('pageant.registration.store');
Route::get('/sponsers',[FrontController::class,'sponsers'])->name('sponsers');
Route::get('/contact',[FrontController::class,'contact'])->name('contact');
Route::post('/contact-store',[FrontController::class,'contact_store'])->name('contact.store');
Route::post('/register-store', [FrontController::class, 'registration_store'])->name('registration.store');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
