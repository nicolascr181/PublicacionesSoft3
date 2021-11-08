<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CategoryController;

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

Route::get('/', function () {
    return view('welcome');
});

/**
 * Conjunto de rutas a las cuales se accede con un prefijo
 */
Route::prefix('dashboard')->group(function () {

    /**
     * Llamamos las rutas del controladr PostController tipo resource
     */
    Route::resource('post', PostController::class);
    Route::resource('category', CategoryController::class);
});