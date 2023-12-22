<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

/**
 * Load the numbers
 */
Route::post('/load', function (Request $request){

    return response()->json([
        'a' => rand(1,999),
        'b'=> rand(1,999),
    ]);
});

/**
 * Process the numbers
 * @param Request $request
 * 
 */
Route::post('/process', function (Request $request) {

     // read the request
      $num1 = $request->input('a');
      $num2 = $request->input('b');
    // process the numbers
      $sum = $num1 + $num2;
    
    // return the result
    return response()->json(['sum' => $sum]);
});










Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});