<?php


namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SubmitCarRequest extends FormRequest
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
            'driver_name_en' => 'required|string|min:1|max:50',
            'driver_name_ar' => 'required|string|min:1|max:50',
            'description_en' => 'required|string|min:1|max:500',
            'description_ar' => 'required|string|min:1|max:500',
            'manufacturing_year' => 'required|string|max:50',
            'license_number' => 'required|string|max:50',
            'driver_phone' => 'required|string|max:50',
            'day_rent_price' => 'required|numeric',
            'country_id' => 'required|exists:countries,id',
            'city_id' => 'required|exists:cities,id',
            'car_brand_id' => 'required|exists:car_brands,id',
            'car_type_id' => 'required|exists:car_types,id',
            ];
    }


}
