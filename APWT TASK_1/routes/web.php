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

Route::get('/pages/index/landingPages/', [PagesController::class, 'index'])->name('home');
Route::get('/pages/products/services',[PagesController::class, 'services'])->name('services');
Route::get('/pages/ourteams',[PagesController::class, 'ourteams'])->name('ourteams');
Route::get('/pages/contactus',[PagesController::class, 'contactus'])->name('contactus');
Route::get('/pages/aboutUs',[PagesController::class, 'aboutUs'])->name('aboutUs');

//
