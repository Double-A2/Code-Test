<?php

namespace App\Http\Requests\Api\Coupon;

use Illuminate\Http\JsonResponse;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Foundation\Http\FormRequest as APICodeTestCoupon;

class CouponListRequest extends APICodeTestCoupon
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required',
            'offset' => 'integer',
            'limit' => 'integer'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'The name field is required.',
        ];
    }


    protected function failedValidation(Validator $validator)
    {
        $errors = $this->transformErrors((new ValidationException($validator)));

        throw new HttpResponseException(
            response()->json([
                'success' => 0,
                'code' => 400,
                'meta' => [
                    'method' => 'GET',
                    'end_point' => Request::path(),
                ],

                'errors' => [
                    'message' => 'The request parameters are incorrect, please make sure to follow the documentation about request parameters of the resource.',
                    'code' => mt_rand(11111, 99999),
                    'validation' => $errors
                ]
            ], JsonResponse::HTTP_UNPROCESSABLE_ENTITY)
        );
    }

    private function transformErrors(ValidationException $exception)
    {
        $errors = [];

        foreach ($exception->errors() as $field => $message) {
            $errors[] = [
                'attribute' => $field,
                'errors' => $message[0],
            ];
        }

        return $errors;
    }
}
