<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 3/24/22
 * Time: 9:39 AM
 */
use App\Http\Controllers\Api\ShopController;

Route::post('shops',[ShopController::class,'store']);
Route::get('shop/{id}',[ShopController::class,'show']);
Route::get('shops',[ShopController::class,'index']);
Route::put('shops/{id}',[ShopController::class,'update']);
Route::delete('shop/{id}',[ShopController::class,'destroy']);