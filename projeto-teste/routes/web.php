<?php

use Illuminate\Support\Facades\Route;


// Route::get('/', function () {
//     return view("ulkit.model");
// });

Route::get('landing_page', function () {
    return view("freelancer.index");
});

// Route::get('landing_page', function () {
//     return view("freelancer.page");
// });
