<?php

namespace App\Http\Requests\Settings;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class DisableEmailTwoFactorRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return $this->user() !== null;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'code' => [
                'required',
                'string',
                'regex:/^\d{6}$/',
            ],
        ];
    }

    /**
     * Custom validation messages.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'code.required' => 'Please enter the verification code.',

            'code.regex' => 'The verification code must contain exactly 6 digits.',
        ];
    }

    /**
     * Prepare request data before validation.
     */
    protected function prepareForValidation(): void
    {
        $this->merge([
            'code' => preg_replace(
                    '/[^0-9]/',
                    '',
                    trim((string) $this->input('code'))
                ) ?? '',
        ]);
    }
}
