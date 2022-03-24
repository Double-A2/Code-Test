<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 3/24/22
 * Time: 10:35 AM
 */

use App\Http\Controllers\Api\CouponShopController;



Route::post('coupons/shops',[CouponShopController::class,'store']);
Route::get('/coupon_shops/{id}',[CouponShopController::class,'show']);
//Route::get('coupon_shop/{}',[CouponShopController::class,'index']);
//Route::put('coupons/{id}',[CouponShopController::class,'update']);
//Route::delete('coupon/{id}',[CouponShopController::class,'destroy']);