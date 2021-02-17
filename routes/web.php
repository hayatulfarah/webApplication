<?php

use Illuminate\Support\Facades\Route;

Route::get('/webapp', function () {
    return view('posts.index');
});
