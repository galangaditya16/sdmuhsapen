<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserManagementRequest extends FormRequest
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
        $rules = [
            'name'      => 'required|string|min:1|max:100',
            'role'      => 'required|numeric|min:1|exists:roles,id',
            'email'     => 'required|email|unique:users,email',
        ];

        if ($this->isMethod('post')) {
            // Saat tambah user
            $rules['password'] = 'required|min:8|regex:/^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/';
            $rules['repassword'] = 'required|same:password';
        } elseif ($this->isMethod('put') || $this->isMethod('patch')) {
            // Saat update user
            $rules['email'] = 'required|email|unique:users,email,' . $this->user->id;
            $rules['password'] = 'nullable|min:8|regex:/^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/';
            $rules['repassword'] = 'same:password';
        }

        return $rules;
    }


    public function attributes()
    {
        return [
            'name' => 'Name',
            'password' => 'Password',
            'email' => 'Email',
            'role' => 'Role',
            'repassword' => 'Confirm Password'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Name is required',
            'name.min' => 'Name must be at least 8 characters',
            'name.max' => 'Name cannot exceed 100 characters',
            'password.required' => 'Password is required',
            'password.min' => 'Password must be at least 8 characters',
            'password.regex' => 'Password must contain at least one letter and one number',
            'email.required' => 'Email is required',
            'email.email' => 'Please enter a valid email address',
            'email.unique' => 'This email is already registered',
            'role.required' => 'Role is required',
            'role.exists' => 'Selected role is invalid',
            'role.min'    => ':attribute requeire',
            'repassword.required' => 'Please confirm your password',
            'repassword.same' => 'Password confirmation does not match'
        ];
    }
}
