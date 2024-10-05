<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class UsersUpdateRequest extends FormRequest
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
            'name' => ['nullable', 'min:2', 'max:32', 'regex:/^(?=.*[a-zA-Z ])[a-zA-Z0-9 ]+$/i'],
            'email' => ['nullable', 'email'],
            'password' => ['nullable', 'min:8', 'max:16', 'regex:/^(?=.*[!@#$%^&*(),.?":{}|<>])(?=.*[0-9])(?=.*[A-Z])(?=.*[a-z]).{8,16}$/'],
            'role' => ['nullable', 'in:admin,manager,user'],
        ];
    }
}
