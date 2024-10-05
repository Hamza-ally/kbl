<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCustomerRequest extends FormRequest
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
            'name' => ['nullable', 'min:2', 'max:26', 'regex:/^(?=.*[a-zA-Z ])[a-zA-Z0-9 ]+$/i'],
            'email' => ['nullable', 'email'],
            'contact' => ['nullable', 'string', 'min:11', 'max:16'],
            'cnic' => ['nullable', 'string', 'min:11', 'max:16'],
            'conn_id' => ['nullable', 'integer'],
            'package_type' => ['nullable', 'in:basic,premium,enterprise'],
            'city' => ['nullable', 'string', 'max:22'],
            'address' => ['nullable', 'string', 'max:256'],
        ];
    }
}
