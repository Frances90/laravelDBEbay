<?php

use Illuminate\Support\Facades\Route;
Route::get("/hello", function () {
    return view('hello');
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/check-name', function () {
    return response()->json([
    'name' => config('app.name'),
    ]);
});