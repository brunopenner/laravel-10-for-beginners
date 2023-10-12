<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

// The above is the same thing as the below command
// Route::view('/', 'welcome');
