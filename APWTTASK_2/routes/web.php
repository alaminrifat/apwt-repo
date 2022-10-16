<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

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

Route::get('/hello', [PagesController::class, 'index'])->name('hello');
Route::get('/contacts', [PagesController::class, 'contacts'])->name('contacts');

Route::get('/registration',[PagesController::class, 'registration'])->name('registration');
Route::post('/registration',[PagesController::class, 'registrationSubmitted'])->name('registration');


Route::get('/login',[PagesController::class, 'login'])->name('login');
Route::post('/login',[PagesController::class, 'loginSubmitted'])->name('login');

Route::get('/contacts',[PagesController::class, 'studentList'])->name('studentList');