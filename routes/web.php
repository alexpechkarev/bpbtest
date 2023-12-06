<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
/**
 * Responsive Divs
 */
Route::get('/one', function () {
    return view('one');
});

/**
 * Form Validation
 */
Route::get('/two', function () {
    return view('two');
});

/**
 * API Call
 */
Route::get('/three', function () {
    return view('three');
});

Route::get('/', function () {
    return view('welcome');
});
