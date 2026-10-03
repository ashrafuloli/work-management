<?php

namespace App\Http\Requests\Settings;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Password;

class UpdatePasswordRequest extends FormRequest
{
    public function authorize(): bool
    {
        return $this->user() !== null;
    }

    public function rules(): array
    {
        return [
            'current_password' => [
                'required',
                'current_password',
            ],

            'password' => [
                'required',
                'string',
                'min:8',
                'confirmed',
                Password::defaults(),
            ],

            'password_confirmation' => [
                'required',
                'string',
            ],
        ];
    }

    public function messages(): array
    {
        return [
            'current_password.required' =>
                __('profile.js.current_password_required'),

            'current_password.current_password' =>
                __('profile.js.current_password_invalid'),

            'password.required' =>
                __('profile.js.password_required'),

            'password.min' =>
                __('profile.js.password_minimum'),

            'password.confirmed' =>
                __('profile.js.password_mismatch'),

            'password_confirmation.required' =>
                __('profile.js.confirm_password_required'),
        ];
    }
}
