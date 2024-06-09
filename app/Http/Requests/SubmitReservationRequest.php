<?php


namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SubmitReservationRequest extends FormRequest
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
            'client_id' => 'required|exists:clients,id',
            'admin_id' => 'required|exists:clients,id',
            'hotel_id' => 'required|exists:hotels,id',
            'room_id' => 'required|exists:rooms,id',
            'car_id' => 'sometimes|exists:cars,id',
            'residence_days' => 'required|numeric',
            ];
    }


}
