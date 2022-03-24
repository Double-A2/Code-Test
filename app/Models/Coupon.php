<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Coupon extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable = [
        'admin_id',
        'name',
        'description',
        'discount_type',
        'amount',
        'image_url',
        'code',
        'start_datetime',
        'end_datetime',
        'coupon_type',
        'used_count',
        'deleted_at'

    ];
}
