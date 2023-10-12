<?php

use App\Http\Controllers\userdata;
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


Route::get('/', [userdata::class, "index"])->name('pages.login.index');
Route::get('/dashboard', [userdata::class, "dashboard"])->name('pages.login.dashboard');
Route::get('/viewLoan', [userdata::class, "viewloan"])->name('pages.viewloan.viewloan');
Route::get('/viewcustomers', [userdata::class, "viewcustomers"])->name('pages.viewcustomers.viewcustomers');
Route::get('/viewhistry/{id}', [userdata::class, "viewhistry"])->name('viewhistry');
Route::get('/logout', [userdata::class, "logout"])->name('pages.logout');

Route::post('/userRegister', [userdata::class, "userRegister"])->name('pages.login.userRegister');
Route::post('/customerLoan', [userdata::class, "customerLoan"])->name('pages.viewdata.viewdata');
Route::post('/customerpayment', [userdata::class, "customerpayment"])->name('pages.viewcustomers.payment');
Route::post('/login', [userdata::class, "login"])->name('pages.login');

Route::post('/', [userdata::class, "store"])->name('user.store');
