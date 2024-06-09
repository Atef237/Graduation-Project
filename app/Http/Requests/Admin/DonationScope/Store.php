<?php

namespace App\Http\Requests\Admin\DonationScope;

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
            'name'      => 'required|unique:donation_scopes,name|min:3|max:255',
            'icon'      => 'required|min:3|max:255|file|mimes:png,jpg,jpeg',
            'status'    => 'required|in:active,inactive',
        ];
    }
}
