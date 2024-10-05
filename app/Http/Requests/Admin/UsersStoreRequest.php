<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class UsersStoreRequest extends FormRequest
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
            'name' => ['required', 'min:2', 'max:32', 'regex:/^(?=.*[a-zA-Z ])[a-zA-Z0-9 ]+$/i'],
            'email' => ['required', 'email'],
            'password' => ['required', 'min:8', 'max:16', 'regex:/^(?=.*[!@#$%^&*(),.?":{}|<>])(?=.*[0-9])(?=.*[A-Z])(?=.*[a-z]).{8,16}$/'],
            'role' => ['required', 'in:admin,manager,user'],
        ];
    }
}
