<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditUserRequest extends FormRequest
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
            //
            $rules = [
                'name'      => 'required|string|min:1|max:100',
                'role'      => 'required|numeric|min:1|exists:roles,id',
                'email'     => 'required|email|unique:users,email',
            ]
        ];
    }
}
