<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 11/12/21
 * Time: 10:36 AM
 */

namespace App\Repositories;


use App\Repositories\Interfaces\TestInterface;

class TestRepository implements TestInterface
{

    public function test()
    {
        return 'Hello Repository';
    }
}