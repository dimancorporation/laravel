<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateUserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'phone_number' => 'required|string|max:15',
            'username' => 'required|string|max:255|unique:users,username',
            'email' => 'required|email|max:255|unique:users,email',
            'access' => 'required|in:read,write',
            'seal' => 'nullable|string|max:10',
            'token' => 'nullable|string|max:64',
            'seal_token' => 'nullable|string|max:10',
            'role' => 'required|string|in:admin,user,blocked',
            'password' => 'required|string|min:8|confirmed',
        ];
    }
}
