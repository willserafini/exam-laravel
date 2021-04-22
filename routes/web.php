<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CustomersController;
use App\Http\Controllers\NumbersController;

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

Route::view('/', 'home');
Route::view('contact', 'contact')->name('contact');
Route::view('about', 'about');


/*
Route::get('customers', [CustomersController::class, 'index']);

Route::get('customers/create', [CustomersController::class, 'create']);
Route::post('customers', [CustomersController::class, 'store']);

Route::get('customers/{customer}', [CustomersController::class, 'show']);

Route::get('customers/{customer}/edit', [CustomersController::class, 'edit']);
Route::patch('customers/{customer}', [CustomersController::class, 'update']);

Route::delete('customers/{customer}', [CustomersController::class, 'destroy']);
*/

Route::resource('customers', CustomersController::class);
Route::resource('numbers', NumbersController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
