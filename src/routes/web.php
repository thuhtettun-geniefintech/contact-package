<?php

use Illuminate\Support\Facades\Route;
use Thuhtet\Contact\Http\Controllers\ContactController;

Route::get('contact',[ContactController::class,'index'])->name('contact.index');
Route::post('contact/send',[ContactController::class,'send'])->name('contact.send');
