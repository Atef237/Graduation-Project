<?php

namespace App\Http\Requests\web;

use Illuminate\Foundation\Http\FormRequest;

class ProjectUserStore extends FormRequest
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
            'project_id'                => 'required|exists:project,id',
            'marital_status'            => 'required',
            'number_of_family_members'  => 'required',
            'net_income'                => 'required',
            'address'                   => 'required',
            'health_status'             => 'required',

        ];
    }
}
