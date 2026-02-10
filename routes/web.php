<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;




Route::middleware('auth')->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::get('contacts/add', [ContactController::class, 'create'])->name('contacts.create');  
    Route::post('contacts/add', [ContactController::class,'store'])->name('contacts.store');
    Route::get('contacts/{contact}/edit', [ContactController::class,'edit'])->name('contacts.edit');
    Route::put('contacts/{contact}/edit', [ContactController::class,'update'])->name('contacts.update');
    Route::delete('contacts/{contact}/delete', [ContactController::class,'destroy'])->name('contacts.destroy');
    Route::post('user/logout', [AuthController::class, 'logout'])->name('user.logout');
});

Route::get('user/register', [AuthController::class, 'formRegister'])->name('user.formRegister');
Route::post('user/register', [AuthController::class, 'register'])->name('user.register');
Route::get('user/login', [AuthController::class, 'formLogin'])->name('user.formLogin');
Route::post('user/login', [AuthController::class, 'login'])->name('user.login');
