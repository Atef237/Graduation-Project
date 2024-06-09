<?php

namespace App\Http\Requests\Admin\DonationScope;

use Illuminate\Foundation\Http\FormRequest;

class update extends FormRequest
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
            'name' => 'sometimes|min:3|max:255',
            'icon' => 'sometimes|min:3|max:255|file|mimes:png,jpg,jpeg',
            'status' => 'sometimes|in:active,inactive',
        ];
    }


}
