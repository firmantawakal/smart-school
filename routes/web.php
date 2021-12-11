<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ForgotPasswordController;
use Illuminate\Support\Facades\Auth;
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


// Route::resource('user', UserController::class)->middleware('role:Admin');
Route::resource('user', UserController::class)->middleware('auth');

Route::get('/', [LoginController::class, 'login'])->name('login');
Route::get('login', [LoginController::class, 'login'])->name('login');
Route::get('register', [LoginController::class, 'register'])->name('register');
Route::post('actionregister', [LoginController::class, 'actionregister'])->name('actionregister');
Route::post('actionlogin', [LoginController::class, 'actionlogin'])->name('actionlogin');

Route::get('home', [HomeController::class, 'index'])->name('home')->middleware('auth');
Route::get('actionlogout', [LoginController::class, 'actionlogout'])->name('actionlogout')->middleware('auth');

Route::get('/send-mail', [UserController::class, 'sendmail'])->name('send.mail.index');

Route::get('send-reset/{email}/{username}/{school}', [UserController::class, 'submitForgetPassword'])->name('send.reset.get');
// Route::post('forget-password', [ForgotPasswordController::class, 'submitForgetPasswordForm'])->name('forget.password.post'); 
Route::get('reset-password/{token}', [ForgotPasswordController::class, 'showResetPasswordForm'])->name('reset.password.get');
Route::post('reset-password', [ForgotPasswordController::class, 'submitResetPasswordForm'])->name('reset.password.post');

Route::post('send-message', [UserController::class, 'send_message'])->name('send-message');
// Route::get('test', function () {
//     event(new App\Events\StatusLiked(Auth::user()->username,'student1'));
//     return "Event has been sent!";
// });
Route::get('notif', [HomeController::class, 'notif'])->name('notif');
