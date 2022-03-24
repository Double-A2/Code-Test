<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CouponShop extends Model
{
    use HasFactory;
    protected $fillable = [
        'coupon_id',
        'shop_id'
    ];

    public function coupons()
    {
        return $this->belongsTo(Coupon::class,'coupon_id','id');
    }

    public function shops()
    {
        return $this->belongsTo(Shop::class,'shop_id','id');
    }
}
