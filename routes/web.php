<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\EmployeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;

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

Route::get('/login', [LoginController::class, 'index'])->name('login.index');

Route::post('/login',[LoginController::class,'login'])->name('login');
Route::get('/show-dashboard',[LoginController::class,'show_dashboard'])->name('dashboard');

                //   Admin

Route::get('/create-admin', [AdminController::class,'create'])->name('create.admin');
Route::post('/admin-store',[AdminController::class,'store'])->name('admin.store');
Route::get('/all-data',[AdminController::class,'index'])->name('alldata');

Route::get('/admis-edit/{id}',[AdminController::class,'edit'])->name('admin.edit');
Route::post('/admins-update',[AdminController::class,'update'])->name('admin.update');

Route::get('/file/{id}',[AdminController::class,'destroy'])->name('admin.destroy');

                    //  User
Route::get('/create-user', [UserController::class,'create'])->name('create.user');
Route::post('/user-store',[UserController::class,'store'])->name('user.store');
Route::get('/alluser-data',[UserController::class,'index'])->name('alluser.data');

Route::get('/user-edit/{id}',[UserController::class,'edit'])->name('user.edit');
Route::post('/users-update',[UserController::class,'update'])->name('user.update');
Route::get('/files/{id}',[UserController::class,'destroy'])->name('user.destroy');


            //  FrontEnd
Route::get('/',[HomeController::class,'index'])->name('front.index');
Route::post('/search',[HomeController::class,'search'])->name('front.search');







