<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 3/24/22
 * Time: 1:08 AM
 */

namespace App\Repositories;
use App\Models\CouponShop;
use App\Repositories\BaseRepository;
use App\Repositories\Interfaces\CouponShopInterface;



class CouponShopRepository extends BaseRepository implements CouponShopInterface
{

    public function model()
    {
        return CouponShop::class;
    }

}