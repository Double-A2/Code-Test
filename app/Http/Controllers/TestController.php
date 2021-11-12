<?php

namespace App\Http\Controllers;

use App\Repositories\Interfaces\TestInterface;
use Illuminate\Http\Request;

class TestController extends Controller
{

    private $testInterface;
    public function __construct(TestInterface $testInterface)
    {
        $this->testInterface = $testInterface;
    }


    public function index()
    {
        return $this->testInterface->test();
    }
}
