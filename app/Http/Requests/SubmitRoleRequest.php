<?php


namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SubmitRoleRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string|min:1|max:50',
            'title_en' => 'required|string|min:1|max:50',
            'title_ar' => 'required|string|min:1|max:50',
            'description_en' => 'nullable|string|min:1|max:100',
            'description_ar' => 'nullable|string|min:1|max:100',
        ];
    }


}
