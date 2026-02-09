<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;




Route::inertia('/about', 'Admin/About')->name('about');

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('contacts/add', [ContactController::class, 'create'])->name('contacts.create');
Route::post('contacts/add', [ContactController::class,'store'])->name('contacts.store');
Route::get('contacts/{contact}/edit', [ContactController::class,'edit'])->name('contacts.edit');
Route::put('contacts/{contact}/edit', [ContactController::class,'update'])->name('contacts.update');
Route::delete('contacts/{contact}/edit', [ContactController::class,'delete'])->name('contacts.delete');

