<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Coupon\CouponListRequest;
use App\Http\Requests\Api\Shop\ShopRequest;
use App\Http\Requests\Api\Shop\ShopUpdateReqeust;
use App\Repositories\Interfaces\ShopInterface;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    private $shop;

    public function __construct(ShopInterface $shop)
    {
        $this->shop = $shop;
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
        $shop_lists = $this->shop->paginate($limit);

        $shop_lists = [
            "success" => 1,
            "code" => 200,
            "meta" => [
                "method" => "GET",
                "endpoint" => request()->path(),
                'total' => $shop_lists->total(),
                'limit' => $limit,
                'offset' => $offset,
            ],
            "data" => [
                $shop_lists->items()
            ],
            "errors" => [
            ],
        ];

        return response()->json($shop_lists);
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
    public function store(ShopRequest $request)
    {
        $shop = $this->shop->create($request->all());

        return response()->json([
            'success' => 1,
            'code' => 201,
            'meta' => [
                'method' => 'POST',
                'end_point' => request()->path()
            ],
            'data' => [
                'id' => $shop->id
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
    public function show($id)
    {
        $shop = $this->shop->where('id', $id, '=')->first();

        if ($shop) {
            $response = [
                "success" => 1,
                "code" => 200,
                "meta" => [
                    "method" => "GET",
                    "endpoint" => request()->path()
                ],
                "data" => $shop,
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
    public function update(ShopUpdateReqeust $request, $id)
    {
        if ($id == '') {
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
            return response()->json($response, 404);
        } else {
            $shop = $this->shop->updateById($id, $request->all());

            if ($shop) {
                $status = 200;
                $response = [
                    "success" => 1,
                    "code" => 200,
                    "meta" => [
                        "method" => "PUT",
                        "endpoint" => request()->path()
                    ],
                    "data" => [
                        "updated" => $shop->id
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
            $shop = $this->shop->deleteById($id);

            if ($shop == true) {
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
