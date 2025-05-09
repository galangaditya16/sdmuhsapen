<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class QuestiionRequest extends FormRequest
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
            'name' => 'required|string|max:200',
            'no_hp' => 'numeric|min:11|max:14|nullable',
            'email' => 'required|email|max|200',
            'form'  => 'required|max:200',
            'message' => 'required|max:200',
        ];
    }
}
