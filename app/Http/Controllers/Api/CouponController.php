<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;

use App\Http\Requests\Api\Coupon\CouponDeleteRequest;
use App\Http\Requests\Api\Coupon\CouponListRequest;
use App\Http\Requests\Api\Coupon\CouponRequest;
use App\Http\Requests\Api\Coupon\CouponUpdateRequest;
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
    public function index(CouponListRequest $request)
    {
        $limit = $request->limit;
        $offset = $request->offset;
        $coupon_lists = $this->counpon->paginate($limit);

        $coupon_lists = [
            "success" => 1,
            "code" => 200,
            "meta" => [
                "method" => "GET",
                "endpoint" => request()->path(),
                'total' => $coupon_lists->total(),
                'limit' => $limit,
                'offset' => $offset,
            ],
            "data" => [
                $coupon_lists->items()
            ],
            "errors" => [
            ],
        ];

        return response()->json($coupon_lists);
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
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(CouponRequest $request, $admin)
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
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($admin, $id)
    {
        $coupon = $this->counpon->where('admin_id', $admin, '=')->where('id', $id, '=')->first();

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
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(CouponUpdateRequest $request, $id)
    {
        $coupon = $this->counpon->updateById($id, $request->all());


        if ($coupon) {
            $status = 200;
            $response = [
                "success" => 1,
                "code" => 200,
                "meta" => [
                    "method" => "PUT",
                    "endpoint" => request()->path()
                ],
                "data" => [
                    "updated" => $coupon->id
                ],
                "errors" => [
                ]
            ];
        } else {
            $status = 404;
            $response = [
                "success" => 1,
                "code" => 200,
                "meta" => [
                    "method" => "PUT",
                    "endpoint" => request()->path()
                ],
                "data" => [
                ],
                "errors" => [
                    "message" => "The updating resource that corresponds to the ID wasn't found.",
                    "code" => mt_rand(11111, 99999)
                ],

            ];
        }

        return response()->json($response, $status);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if ($id == '') {
            $response = [
                "success" => 0,
                "code" => 400,
                "meta" => [
                    "method" => "DELETE",
                    "endpoint" => request()->path()
                ],
                "data" => [
                ],
                "errors" => [
                    "message" => "The request parameters are incorrect, please make sure to follow the documentation about request parameters of the resource.",
                    "code" => 400002,
                    "validation" => [
                        [
                            "attribute" => "name",
                            "errors" => [
                                [
                                    "key" => "required",
                                    "message" => "The ID field is required."
                                ],
                            ]
                        ]
                    ]
                ],
            ];

            return response()->json($response);
        } else {
            $coupon = $this->counpon->deleteById($id);

            if ($coupon == true) {
                $response = [
                    "success" => 1,
                    "code" => 200,
                    "meta" => [
                        "method" => "DELETE",
                        "endpoint" => request()->path()
                    ],
                    "data" => [
                        "deleted" => $id
                    ],
                    "errors" => [
                    ],
                ];;
            } else {
                $response = [
                    "success" => 0,
                    "code" => 404,
                    "meta" => [
                        "method" => "DELETE",
                        "endpoint" => request()->path()
                    ],
                    "data" => [
                    ],
                    "errors" => [
                        "message" => "The deleting resource that corresponds to the ID wasn't found.",
                        "code" => mt_rand(11111, 99999)
                    ],

                ];
            }

            return response()->json($response);
        }


    }
}
