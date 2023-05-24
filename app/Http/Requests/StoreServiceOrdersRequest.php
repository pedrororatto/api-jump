<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreServiceOrdersRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'vehiclePlate' => 'required|string|max:7',
            'entryDateTime' => 'required|date',
            'exitDateTime' => 'nullable|date',
            'priceType' => 'nullable|string|max:55',
            'price' => 'nullable|numeric',
            'userId' => 'required|exists:users,id',
        ];
    }
}
