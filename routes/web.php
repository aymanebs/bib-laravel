<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\testController;
use App\Models\Book;
use App\Models\Reservation;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', function () {
     return view('welcome');
});






// Books

Route::get('/books',[BookController::class,'index'])->name('book.index');
Route::get('books/create',[BookController::class,'create'])->middleware('admin');
Route::post('books/create',[BookController::class,'store'])->middleware('admin');
Route::get('books/{book}/edit',[BookController::class,'edit'])->middleware('admin');
Route::put('books/{book}/update',[BookController::class,'update'])->middleware('admin');
Route::get('books/{book}/delete',[BookController::class,'destroy'])->middleware('admin');


// reservation

Route::get('/reservations',[ReservationController::class,'index'])->name('reservation.index')->middleware('admin');
Route::get('/reservations/user',[ReservationController::class,'indexForUser'])->name('reservation.user.index')->middleware('user');
Route::get('reservations/{book}/create',[ReservationController::class,'create']);
Route::post('reservations/create',[ReservationController::class,'store']);
Route::get('reservations/{reservation}/delete',[ReservationController::class,'destroy']);


// Auth

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


