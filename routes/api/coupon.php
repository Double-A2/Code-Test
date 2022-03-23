<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 3/23/22
 * Time: 9:42 PM
 */
use App\Http\Controllers\Api\CouponController;



Route::post('/{admin}/coupon',[CouponController::class,'store']);