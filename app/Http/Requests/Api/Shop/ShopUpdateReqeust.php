<?php

namespace App\Http\Requests\Api\Shop;

use Illuminate\Http\JsonResponse;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Foundation\Http\FormRequest as APICodeTestShop;

class ShopUpdateReqeust extends APICodeTestShop
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
            'name' => 'max:64',
            'query' => 'max:64',
            'zoom' => 'integer'
        ];
    }

    public function messages()
    {
        return [
            'name.max' => 'The name may not be greater than 64 characters.',
            'query.max' => 'The name may not be greater than 64 characters.',
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
                    'method' => 'POST',
                    'end_point' => Request::path(),
                ],

                'errors' => [
                    'message' => 'The request parameters are incorrect, please make sure to follow the documentation about request parameters of the resource.',
                    'code' => mt_rand(11111,99999),
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
