<?php

use Illuminate\Support\Facades\Route;

Route::get('/testadmin', function () {
    return view('testadmin::dashboard');
});
