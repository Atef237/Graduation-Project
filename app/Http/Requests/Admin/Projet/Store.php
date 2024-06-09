<?php

namespace App\Http\Requests\Admin\Projet;

use Illuminate\Foundation\Http\FormRequest;

class Store extends FormRequest
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
            'name'                  => 'required|max:255',
//            'image'                 => 'required|file|mimes:jpeg,png,jpg,gif,svg',
            'financial_balance'     => 'required|numeric',
            'donation_scope_id'     => 'required|exists:donation_scopes,id',
        ];
    }
}
