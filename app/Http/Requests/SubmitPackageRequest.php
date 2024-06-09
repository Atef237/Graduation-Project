<?php


namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SubmitPackageRequest extends FormRequest
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
            'description_en' => 'required|string|min:1|max:500',
            'description_ar' => 'required|string|min:1|max:500',
            'price' => 'required|numeric',
            'currency' => 'required|string',
            'residence_days' => 'required|numeric|min:1',
            'hotel_id' => 'required|exists:hotels,id',
            'room_id' => 'required|exists:rooms,id',
            'car_id' => 'required|exists:cars,id',
            'start_date' => 'required|before:expire_date',
            'expire_date' => 'required|after:start_date',
            ];
    }


}
