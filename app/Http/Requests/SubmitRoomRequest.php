<?php


namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SubmitRoomRequest extends FormRequest
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
            'night_price' => 'required|numeric|min:10',
            'floor_number' => 'required|numeric',
            'beds_number' => 'required|numeric',
            'is_children_available' => 'nullable|in:1,0',
            'hotel_id' => 'required|exists:hotels,id',
            'room_category_id' => 'required|exists:room_categories,id',
            ];
    }


}
