<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 3/24/22
 * Time: 1:08 AM
 */

namespace App\Repositories;
use App\Models\Shop;
use App\Repositories\BaseRepository;
use App\Repositories\Interfaces\ShopInterface;


class ShopRepository extends BaseRepository implements ShopInterface
{

    public function model()
    {
        return Shop::class;
    }

}