<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MailController;
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
    return view('Home');
});
Route::get('/index', function () {
    return view('Home');
});
Route::get('/register', function () {
    return view('register');
});

Route::get('/apilist', function () {
    return view('apilist');
});

Route::get('/viewproduct', function () {
    return view('viewproduct');
});
Route::get('/react', function () {
    return view('react');
});

Route::get('/reactaxiosget', function () {
    return view('reactaxiosget');
});
Route::get('/reactaxiospost', function () {
    return view('reactaxiospost');
});



Route::get('/home',[PagesController::class,'home']);
Route::post('/register',[RegisterController::class,'getregister']);
Route::get('/customer',[CustomerController::class,'index']);
Route::get('/employee',[EmployeeController::class,'index']);
Route::get('/login', function () {return view('login');});
Route::post('/login',[LoginController::class,'checklogin']);
Route::get('/profile', [ProfileController::class,'profile'])->middleware('checklogin');
Route::get('/logout', [ProfileController::class,'logout']);


Route::get('/sendemail', [MailController::class,'index']);
Route::post('/sendemail/send',[MailController::class,'send']);

