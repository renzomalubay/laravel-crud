<?php

use App\Http\Controllers\User;
use Illuminate\Support\Facades\Route;

Route::get('/', [User::class, 'index'])->name('index');

Route::get('/employees', function () {
    return view('pages.employees');
});
