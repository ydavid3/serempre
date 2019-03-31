<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'name' => 'required|unique:sr_users',
            'password' => 'required',
            'client' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'A :attribute is required',
            'password.required' => 'A :attribute is required',
            'client.required' => 'A :attribute  is required',
        ];
    }
}
