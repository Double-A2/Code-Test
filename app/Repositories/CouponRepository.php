<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 3/24/22
 * Time: 1:08 AM
 */

namespace App\Repositories;
use App\Models\Coupon;
use App\Repositories\BaseRepository;
use App\Repositories\Interfaces\CouponInterface;


class CouponRepository extends BaseRepository implements CouponInterface
{

    public function model()
    {
        return Coupon::class;
    }

}