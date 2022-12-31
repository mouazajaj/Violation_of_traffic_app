<?php

namespace App\Http\Requests;

use Laravel\Jetstream\Jetstream;
use Illuminate\Foundation\Http\FormRequest;
use App\Actions\Fortify\PasswordValidationRules;

class UserRequest extends FormRequest
{
    use PasswordValidationRules;
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'Full_name' => ['required', 'string', 'max:100'],
            'National_Number' => ['required', 'digits:11', 'unique:users'],
            'Phone_Number' => ['required', 'digits:10', 'unique:users', 'regex:/(09)[0-9]{8}/'],
            'Date_of_birth' => ['required', 'Date'],
            'password' => $this->passwordRules(),
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['accepted', 'required'] : '',
        ];
    }
}
