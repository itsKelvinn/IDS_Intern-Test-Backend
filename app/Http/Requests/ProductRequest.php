<?php

namespace App\Http\Requests;

use App\Constants\Status;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class ProductRequest extends FormRequest
{
    protected function failedValidation(Validator $validator)
    {
        $response = [
            "data" => null,
            "status" => Status::FAILED
        ];

        throw new HttpResponseException(response()->json($response, 422));
    }

    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'productName' => 'required',
        ];
    }
}
