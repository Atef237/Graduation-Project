<?php


namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SubmitHotelRequest extends FormRequest
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
            'name_en' => 'required|string|min:1|max:50',
            'name_ar' => 'required|string|min:1|max:50',
            'phone' => 'required|string|max:50',
            'lat' => 'required|string|max:50',
            'lng' => 'required|string|max:50',
            'country_id' => 'required|exists:countries,id',
            'city_id' => 'required|exists:cities,id',
            'hotel_category_id' => 'required|exists:hotel_categories,id',
            'website' => 'required|string|max:255|url',
            ];
    }


}
