<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUserRequest extends FormRequest
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
            'first_name' => 'string|max:255',
            'last_name' => 'string|max:255',
            'phone_number' => 'string|max:15',
            'username' => 'string|max:255|unique:users,username',
            'email' => 'email|max:255|unique:users,email',
            'access' => 'in:read,write',
            'seal' => 'nullable|string|max:10',
            'token' => 'nullable|string|max:64',
            'seal_token' => 'nullable|string|max:10',
            'role' => 'string|in:admin,user,blocked',
            'password' => 'string|min:8|confirmed',
        ];
    }
}
