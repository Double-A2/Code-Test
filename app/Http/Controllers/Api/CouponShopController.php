<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\CouponShop\CouponShopRequest;
use App\Repositories\Interfaces\CouponShopInterface;
use Illuminate\Http\Request;

class CouponShopController extends Controller
{

    private $coupon_shop;

    public function __construct(CouponShopInterface $couponShop)
    {
        $this->coupon_shop = $couponShop;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CouponShopRequest $request)
    {
        $coupon = $this->coupon_shop->create($request->all());

        return response()->json([
            'success' => 1,
            'code' => 201,
            'meta' => [
                'method' => 'POST',
                'end_point' => request()->path()
            ],
            'data' => [
                'id' => $coupon->id
            ],
            'errors' => []

        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $coupon = $this->coupon_shop->with('coupons')->with('shops')->where('coupon_id', $id, '=')->first();

        if ($coupon) {
            $response = [
                "success" => 1,
                "code" => 200,
                "meta" => [
                    "method" => "GET",
                    "endpoint" => request()->path()
                ],
                "data" => $coupon,
                "errors" => [
                ]
            ];
        } else {
            $response = [
                "success" => 0,
                "code" => 404,
                "meta" => [
                    "method" => "GET",
                    "endpoint" => request()->path()
                ],
                "data" => [
                ],
                "errors" => [
                    "message" => "The resource that matches the request ID does not found.",
                    "code" => mt_rand(11111, 99999)
                ],
            ];
        }


        return response()->json($response);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
