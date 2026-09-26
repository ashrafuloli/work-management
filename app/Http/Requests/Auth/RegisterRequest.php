<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Password;

class RegisterRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules(): array
    {
        return [
            /*
            |--------------------------------------------------------------------------
            | First Name
            |--------------------------------------------------------------------------
            */

            'first_name' => [
                'required',
                'string',
                'min:2',
                'max:100',
            ],

            /*
            |--------------------------------------------------------------------------
            | Last Name
            |--------------------------------------------------------------------------
            */

            'last_name' => [
                'nullable',
                'string',
                'max:100',
            ],

            /*
            |--------------------------------------------------------------------------
            | Email
            |--------------------------------------------------------------------------
            */

            'email' => [
                'required',
                'string',
                'lowercase',
                'email',
                'max:255',
                'unique:users,email',
            ],

            /*
            |--------------------------------------------------------------------------
            | Password
            |--------------------------------------------------------------------------
            */

            'password' => [
                'required',
                'string',
                'confirmed',
                Password::min(8)
                    ->letters()
                    ->mixedCase()
                    ->numbers(),
            ],

            /*
            |--------------------------------------------------------------------------
            | Terms & Conditions
            |--------------------------------------------------------------------------
            */

            'terms' => [
                'required',
                'accepted',
            ],
        ];
    }

    /**
     * Get custom messages for validator errors.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            /*
            |--------------------------------------------------------------------------
            | First Name
            |--------------------------------------------------------------------------
            */

            'first_name.required' =>
                'First name is required.',

            'first_name.string' =>
                'First name must be a valid text.',

            'first_name.min' =>
                'First name must be at least 2 characters.',

            'first_name.max' =>
                'First name may not be greater than 100 characters.',


            /*
            |--------------------------------------------------------------------------
            | Last Name
            |--------------------------------------------------------------------------
            */

            'last_name.string' =>
                'Last name must be a valid text.',

            'last_name.max' =>
                'Last name may not be greater than 100 characters.',


            /*
            |--------------------------------------------------------------------------
            | Email
            |--------------------------------------------------------------------------
            */

            'email.required' =>
                'Email address is required.',

            'email.string' =>
                'Email address must be a valid text.',

            'email.email' =>
                'Please enter a valid email address.',

            'email.max' =>
                'Email address may not be greater than 255 characters.',

            'email.unique' =>
                'An account with this email already exists.',


            /*
            |--------------------------------------------------------------------------
            | Password
            |--------------------------------------------------------------------------
            */

            'password.required' =>
                'Password is required.',

            'password.string' =>
                'Password must be a valid text.',

            'password.confirmed' =>
                'Passwords do not match.',


            /*
            |--------------------------------------------------------------------------
            | Terms
            |--------------------------------------------------------------------------
            */

            'terms.required' =>
                'You must agree to the Terms of Service.',

            'terms.accepted' =>
                'You must agree to the Terms of Service.',
        ];
    }

    /**
     * Prepare the data for validation.
     */
    protected function prepareForValidation(): void
    {
        $this->merge([
            'first_name' => trim((string) $this->input('first_name')),
            'last_name' => $this->filled('last_name')
                ? trim((string) $this->input('last_name'))
                : null,
            'email' => strtolower(
                trim((string) $this->input('email'))
            ),
        ]);
    }
}
