<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;


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


//Avoir tous les produits

Route::get('/article',[ArticleController::class,'index']);

//Avoir un produit precis

Route::get('/article/{id}',[ArticleController::class,'show']);

//Creer un nouvel produit

Route::post('/article',[ArticleController::class,'store']);

// Mettre a jour un produit

Route::put('/article/{id}',[ArticleController::class,'update']);

//Supprimer un produit

Route::delete('/article/{id}',[ArticleController::class,'destroy']);


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});





