<?php

namespace App\Http\Requests\web;

use Illuminate\Foundation\Http\FormRequest;

class DonorRegister extends FormRequest
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
            'name' => 'required|string|max:255',
            'phone' => 'required|unique:users,phone|min:11|max:11',
            'password' => 'required|min:5|max:255',
        ];
    }
}
