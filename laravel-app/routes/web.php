<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes for Hawzah Management Platform (Laravel 12 / Blade)
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('dashboard');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/students', function () {
    return view('students.index');
});

Route::get('/attendance', function () {
    return view('attendance.index');
});

Route::get('/tuition', function () {
    return view('tuition.index');
});

Route::get('/loans', function () {
    return view('loans.index');
});

Route::get('/meals', function () {
    return view('meals.index');
});

Route::get('/research', function () {
    return view('research.index');
});

Route::get('/ai', function () {
    return view('ai.index');
});
