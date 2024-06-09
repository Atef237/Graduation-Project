<?php


namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SubmitCountryRequest extends FormRequest
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
            'code_name' => 'required|string|min:1|max:50',
            'phone_key' => 'required|string|min:1|max:50',
            'lng' => 'required|string|min:1|max:50',
            'lat' => 'required|string|min:1|max:50',
            'name_en' => 'required|string|min:1|max:50',
            'name_ar' => 'required|string|min:1|max:50',
            'image'=>'nullable|image|mimes:jpeg,jpg,png,bmp,gif,svg',
            ];
    }


}
