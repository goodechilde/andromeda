<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PersonUpdateRequest extends FormRequest
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
//        $id = $this->route()->parameter('person')->id;

        /**
         * Usage of id
         * 'username' => 'required|unique:users,username,' . $id,
         */

        return [
//            'id' => 'required|unique:people,id,' . $id,
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
}
