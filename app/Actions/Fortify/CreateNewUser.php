<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array  $input
     * @return \App\Models\User
     */
    public function create(array $input)
    {
        Validator::make($input, [
            'Full_name' => ['required', 'string', 'max:100'],
            'National_Number' => ['required', 'digits:11', 'unique:users'],
            'Phone_Number' => ['required', 'digits:10', 'unique:users', 'regex:/(09)[0-9]{8}/'],
            'Date_of_birth' => ['required', 'Date'],
            'password' => $this->passwordRules(),
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['accepted', 'required'] : '',
        ])->validate();

        return User::create([
            'Full_name' => $input['Full_name'],
            'Phone_Number' => $input['Phone_Number'],
            'Date_of_birth' => $input['Date_of_birth'],
            'National_Number' => $input['National_Number'],
            'password' => Hash::make($input['password']),
        ]);
    }
}
