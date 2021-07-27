<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CompanyRequest extends FormRequest
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
        switch($this->method()) {
            case 'POST':
                return [
                    'cname' => 'required',
                    'address' => 'required',
                    'email' => 'required|email|unique:companies,Email',
                    'city' => 'required',
                    'phone' => 'required'
                ];

            case 'PUT':
                return [
                    'cname' => 'required',
                    'address' => 'required',
                    'email' => 'required|email',
                    'city' => 'required',
                    'phone' => 'required'
                ];
            default:break;

        }
    }


    public function messages()
    {
        return [
            'email.required' => 'Email is required!',
            'cname.required' => 'Company Name is required!',
            'address.required' => 'Address is required!',
            'city.required' => 'City is required!',
            'phone.required' => 'Contact number is required!'
        ];
    }
}
