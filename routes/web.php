<?php

use App\Http\Controllers\BirthdayController;
use App\Models\Birthday;
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
Route::get('/', [BirthdayController::class, 'index']);
Route::get('/birthdays/create', [BirthdayController::class, 'create'])->middleware('auth');
Route::get('/birthdays/{id}', [BirthdayController::class, 'show']);
Route::post('/birthdays', [BirthdayController::class, 'store']);
Route::delete('/birthdays/{id}', [BirthdayController::class, 'destroy'])->middleware('auth');
Route::get('/birthdays/edit/{id}', [BirthdayController::class, 'edit'])->middleware('auth');
Route::put('/birthdays/update/{id}', [BirthdayController::class, 'update'])->middleware('auth');

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/dashboard',[BirthdayController::class, 'dashboard'])->middleware('auth');

Route::post('/birthdays/join/{id}', [BirthdayController::class, 'joinBirthday'])->middleware('auth');

Route::delete('/birthdays/leave/{id}', [BirthdayController::class, 'leaveBirthday'])->middleware('auth');