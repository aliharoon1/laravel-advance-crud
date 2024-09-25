<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/phone', ['App\Http\Controllers\TestFormFieldsController', 'indexPhone'])->name('phone.index');
Route::post('/phone', ['App\Http\Controllers\TestFormFieldsController', 'storePhone'])->name('phone.store');
