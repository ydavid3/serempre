<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClientRequest extends FormRequest
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
            'cod' => 'required|max:80',
            'name' => 'required',
            'municipality' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'cod.required' => 'A :attribute is required',
            'name.required' => 'A :attribute is required',
            'municipality.required' => 'A :attribute  is required',
        ];
    }

}
