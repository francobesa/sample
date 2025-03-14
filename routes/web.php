<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route:: get('/page1', 'App\Http\Controllers\page1Controller@index');
