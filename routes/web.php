<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\rutasController;
use App\Http\Controllers\ProductController;

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

Route::get('/', [rutasController::class, 'home']);
Route::get('/home', [rutasController::class, 'home']);
Route::get('/create', [rutasController::class, 'create']);

Route::get('/order', [rutasController::class, 'order']);
//Route::get('categorias/{name[]}', [ProductController::class, 'home']);

Route::get('/details/{id}', [rutasController::class, 'details']);

Route::get('/contact', [rutasController::class, 'contact']);

Route::get('/offers', [rutasController::class, 'offers']);

Route::post('productos', [ProductoController::class, 'store']);
Route::post('/products/{id}', [rutasController::class, 'update']);
?>