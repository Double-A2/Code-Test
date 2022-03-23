<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\CouponRequest;
use App\Repositories\Interfaces\CouponInterface;
use Illuminate\Http\Request;

class CouponController extends Controller
{
    private $counpon;

    public function __construct(CouponInterface $counponInterface)
    {
        $this->counpon = $counponInterface;
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
    public function store(CouponRequest $request,$admin)
    {
       $coupon = $this->counpon->create(array_merge($request->all(), ['admin_id' => $admin]));

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
    public function show($admin,$id)
    {
        $coupon = $this->counpon->where('admin_id',$admin,'=')->where('id',$id,'=')->first();

        if($coupon) {
            $response =  [
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
        }else{
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
                    "code" => mt_rand(11111,99999)
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
