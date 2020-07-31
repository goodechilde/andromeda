<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Http\Response;

class PersonStoreRequest extends FormRequest
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
            'preferred_name' => 'string',
            'first_name' => 'required|string',
            'middle_name' => 'string',
            'last_name' => 'string',
            'title' => 'string',
            'suffix' => 'string',
            'professional_title' => 'string',
            'preferred_language' => 'string',
            'date_of_birth' => 'string',
            'person_type_id' => 'int',
        ];
    }

    protected function failedValidation(Validator $validator): void
    {
        throw new HttpResponseException(
            \response()->json([
                'messages' => $validator->errors()->all(),
            ], Response::HTTP_UNPROCESSABLE_ENTITY),
        );
    }
}
