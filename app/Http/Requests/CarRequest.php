<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CarRequest extends FormRequest
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
            'Model' => ['nullable', 'max:50'],
            'Car_Number' => ['required', 'unique:cars', 'max:8'],
            'Financial_fees' => ['required', 'date'],
            'National_Number' => ['required', 'exists:users,National_Number'],
        ];
    }
}
