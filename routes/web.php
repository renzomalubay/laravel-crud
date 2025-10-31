<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.login');
});Route::get('/employees', function () {
    return view('pages.employees');
});
