<?php

namespace App\Http\Requests\Web;

use Illuminate\Foundation\Http\FormRequest;

class BeneficiaryRegister extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name'                      => 'required', 'string', 'max:255',
            'password'                  => 'required', 'min:8', 'confirmed',
            'phone'                     => 'required', 'string', 'max:11', 'unique:users,phone',
            'nationality_id'            => 'required', 'unique:users,nationality_id','string', 'max:14',
        ];
    }


    public function message()
    {
        return [
            'name.required'             => 'Name is required',
            'password.required'         => 'Password is required',
            'phone.required'            => 'Phone is required',
            'nationality_id.required'   => 'Nationality is required',
        ];
    }
}
