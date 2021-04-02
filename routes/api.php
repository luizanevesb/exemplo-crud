<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
/*
Route::middleware('api')->group(function () {
    Route::resource('produtos', ProdutoController::class);
});
*/

Route::get('produtos', '\App\Http\Controllers\ProdutoController@index'); 
Route::group(['prefix' => 'produtos'], function () {
    Route::post('novo', 'PostController@store');
    Route::get('editar/{id}', 'App\Http\Controllers\PostController@edit');
    Route::post('editar/{id}', 'App\Http\Controllers\PostController@update');
    Route::delete('delete/{id}', 'PostController@destroy');
});