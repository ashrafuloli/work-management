<?php

namespace App\Http\Requests\Settings;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class UpdateProfileRequest extends FormRequest
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
            /*
            |--------------------------------------------------------------------------
            | Personal Information
            |--------------------------------------------------------------------------
            */

            'first_name' => [
                'required',
                'string',
                'min:2',
                'max:100',
            ],

            'last_name' => [
                'nullable',
                'string',
                'max:100',
            ],

            'display_name' => [
                'nullable',
                'string',
                'min:2',
                'max:150',
            ],


            /*
            |--------------------------------------------------------------------------
            | Professional Information
            |--------------------------------------------------------------------------
            */

            'job_title' => [
                'nullable',
                'string',
                'max:150',
            ],

            'department' => [
                'nullable',
                'string',
                'max:150',
            ],

            'phone' => [
                'nullable',
                'string',
                'max:30',
            ],

            'bio' => [
                'nullable',
                'string',
                'max:1000',
            ],


            /*
            |--------------------------------------------------------------------------
            | Address
            |--------------------------------------------------------------------------
            */

            'address_line_1' => [
                'nullable',
                'string',
                'max:255',
            ],

            'address_line_2' => [
                'nullable',
                'string',
                'max:255',
            ],

            'city' => [
                'nullable',
                'string',
                'max:100',
            ],

            'state' => [
                'nullable',
                'string',
                'max:100',
            ],

            'postal_code' => [
                'nullable',
                'string',
                'max:20',
            ],

            'country' => [
                'nullable',
                'string',
                'max:100',
            ],


            /*
            |--------------------------------------------------------------------------
            | Account Preferences
            |--------------------------------------------------------------------------
            */

            'timezone' => [
                'required',
                'string',
                'timezone',
            ],

            'locale' => [
                'required',
                'string',
                'max:10',
            ],

            'date_format' => [
                'required',
                'string',
                'max:30',
                'in:MMM D, YYYY,DD MMM YYYY,MM/DD/YYYY,DD/MM/YYYY,YYYY-MM-DD',
            ],

            'theme' => [
                'required',
                'string',
                'in:light,dark,system',
            ],
        ];
    }

    /**
     * Get custom messages for validator errors.
     */
    public function messages(): array
    {
        return [
            /*
            |--------------------------------------------------------------------------
            | Personal Information
            |--------------------------------------------------------------------------
            */

            'first_name.required' => 'First name is required.',
            'first_name.string' => 'First name must be valid text.',
            'first_name.min' => 'First name must be at least 2 characters.',
            'first_name.max' => 'First name may not be greater than 100 characters.',

            'last_name.string' => 'Last name must be valid text.',
            'last_name.max' => 'Last name may not be greater than 100 characters.',

            'display_name.string' => 'Display name must be valid text.',
            'display_name.min' => 'Display name must be at least 2 characters.',
            'display_name.max' => 'Display name may not be greater than 150 characters.',


            /*
            |--------------------------------------------------------------------------
            | Professional Information
            |--------------------------------------------------------------------------
            */

            'job_title.string' => 'Job title must be valid text.',
            'job_title.max' => 'Job title may not be greater than 150 characters.',

            'department.string' => 'Department must be valid text.',
            'department.max' => 'Department may not be greater than 150 characters.',

            'phone.string' => 'Phone number must be valid text.',
            'phone.max' => 'Phone number may not be greater than 30 characters.',

            'bio.string' => 'Bio must be valid text.',
            'bio.max' => 'Bio may not be greater than 1000 characters.',


            /*
            |--------------------------------------------------------------------------
            | Address
            |--------------------------------------------------------------------------
            */

            'address_line_1.string' => 'Address must be valid text.',
            'address_line_1.max' => 'Address may not be greater than 255 characters.',

            'address_line_2.string' => 'Address must be valid text.',
            'address_line_2.max' => 'Address may not be greater than 255 characters.',

            'city.string' => 'City must be valid text.',
            'city.max' => 'City may not be greater than 100 characters.',

            'state.string' => 'State must be valid text.',
            'state.max' => 'State may not be greater than 100 characters.',

            'postal_code.string' => 'Postal code must be valid text.',
            'postal_code.max' => 'Postal code may not be greater than 20 characters.',

            'country.string' => 'Country must be valid text.',
            'country.max' => 'Country may not be greater than 100 characters.',


            /*
            |--------------------------------------------------------------------------
            | Account Preferences
            |--------------------------------------------------------------------------
            */

            'timezone.required' => 'Timezone is required.',
            'timezone.string' => 'Timezone must be valid.',
            'timezone.timezone' => 'Please select a valid timezone.',

            'locale.required' => 'Language is required.',
            'locale.string' => 'Language must be valid.',
            'locale.max' => 'Language selection is invalid.',

            'date_format.required' => 'Date format is required.',
            'date_format.string' => 'Date format must be valid.',
            'date_format.max' => 'Date format is invalid.',
            'date_format.in' => 'Please select a valid date format.',

            'theme.required' => 'Theme is required.',
            'theme.string' => 'Theme must be valid.',
            'theme.in' => 'Please select a valid theme.',
        ];
    }

    /**
     * Prepare input before validation.
     */
    protected function prepareForValidation(): void
    {
        $this->merge([
            'first_name' => trim(
                (string) $this->input('first_name')
            ),

            'last_name' => $this->filled('last_name')
                ? trim((string) $this->input('last_name'))
                : null,

            'display_name' => $this->filled('display_name')
                ? trim((string) $this->input('display_name'))
                : null,

            'job_title' => $this->filled('job_title')
                ? trim((string) $this->input('job_title'))
                : null,

            'department' => $this->filled('department')
                ? trim((string) $this->input('department'))
                : null,

            'phone' => $this->filled('phone')
                ? trim((string) $this->input('phone'))
                : null,

            'bio' => $this->filled('bio')
                ? trim((string) $this->input('bio'))
                : null,

            'address_line_1' => $this->filled('address_line_1')
                ? trim((string) $this->input('address_line_1'))
                : null,

            'address_line_2' => $this->filled('address_line_2')
                ? trim((string) $this->input('address_line_2'))
                : null,

            'city' => $this->filled('city')
                ? trim((string) $this->input('city'))
                : null,

            'state' => $this->filled('state')
                ? trim((string) $this->input('state'))
                : null,

            'postal_code' => $this->filled('postal_code')
                ? trim((string) $this->input('postal_code'))
                : null,

            'country' => $this->filled('country')
                ? trim((string) $this->input('country'))
                : null,

            'timezone' => trim(
                (string) $this->input('timezone')
            ),

            'locale' => strtolower(
                trim((string) $this->input('locale'))
            ),

            'date_format' => trim(
                (string) $this->input('date_format')
            ),

            'theme' => strtolower(
                trim((string) $this->input('theme'))
            ),
        ]);
    }
}
