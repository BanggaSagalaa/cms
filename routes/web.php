<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ForgotPasswordController;
use App\Http\Controllers\ChangePasswordController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\FinancialController;
use App\Http\Controllers\ReceiptController;

Route::get('/', [UserController::class, 'index']);
Route::post('/', [UserController::class, 'loginPost']);

Route::get('/forgotpassword', [ForgotPasswordController::class, 'index']);
Route::post('/forgotpassword', [ForgotPasswordController::class, 'sendEmail']);

Route::get('/changepassword', [ChangePasswordController::class, 'index']);
Route::post('/changepassword', [ChangePasswordController::class, 'changePassword']);

Route::get('/dashboard', [DashboardController::class, 'index']);
Route::get('/account', [AccountController::class, 'index']);

Route::get('/createaccount', [AccountController::class, 'index2']);
Route::get('/createaccount/{id}', [AccountController::class, 'index3']);
Route::post('/createaccount', [AccountController::class, 'create']);

Route::get('/profile', [ProfileController::class, 'index']);
Route::post('/profile', [ProfileController::class, 'update']);

Route::get('/financial', [FinancialController::class, 'index']);
Route::get('/createfinancial', [FinancialController::class, 'index2']);
Route::get('/createfinancial/{id}', [FinancialController::class, 'index3']);
Route::post('/createfinancial', [FinancialController::class, 'create']);
Route::get('/map/{id}', [FinancialController::class, 'map']);

Route::get('/receipt', [ReceiptController::class, 'index']);
Route::get('/receipt/{id}', [ReceiptController::class, 'index2']);



Route::post('/logout', [UserController::class, 'destroy']);