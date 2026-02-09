<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddContactRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|max:255',
            'email' => 'required|email|unique:contacts,email',
            'phone' => 'required|max:255|unique:contacts,phone',
            'job_title' => 'required|max:255',
            'company' => 'required|max:255',
            'country' => 'required|max:255',
            'country_code' => 'required|max:255',
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'Name is required',
            'email.required' => 'Email is required',
            'email.email' => 'Email is invalid',
            'email.unique' => 'Email already exists',
            'phone.required' => 'Phone is required',
            'phone.unique' => 'Phone already exists',
            'job_title.required' => 'Job title is required',
            'company.required' => 'Company is required',
            'country.required' => 'Country is required',
            'country_code.required' => 'Country code is required',
        ];
    }
}
