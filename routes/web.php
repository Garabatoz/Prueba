<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CourseController;

Route::get('/', HomeController::class);
// Route::get('/', 'HomeController'); Laravel7

Route::get('courses', [CourseController::class, 'index' ]);
//Route::get('/', 'HomeController@index'); Laravel7

Route::get('courses/create', [CourseController::class, 'create']);

Route::get('courses/{course}', [CourseController::class, 'show']);

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
