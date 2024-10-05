<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCustomerRequest extends FormRequest
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
            'name' => ['required', 'min:2', 'max:26', 'regex:/^(?=.*[a-zA-Z ])[a-zA-Z0-9 ]+$/i'],
            'email' => ['required', 'email'],
            'contact' => ['required', 'string', 'min:11', 'max:16'],
            'cnic' => ['required', 'string', 'min:11', 'max:16'],
            'conn_id' => ['required', 'integer'],
            'package_type' => ['required', 'in:basic,premium,enterprise'],
            'city' => ['required', 'string', 'max:22'],
            'address' => ['required', 'string', 'max:256'],
        ];
    }
}
