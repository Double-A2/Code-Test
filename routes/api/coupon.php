<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 3/23/22
 * Time: 9:42 PM
 */
use App\Http\Controllers\Api\CouponController;



Route::post('/{admin}/coupons',[CouponController::class,'store']);
Route::get('{admin}/coupons/{id}',[CouponController::class,'show']);
Route::get('coupons',[CouponController::class,'index']);
Route::put('coupons/{id}',[CouponController::class,'update']);
Route::delete('coupon/{id}',[CouponController::class,'destroy']);