<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FrontMessageRequest extends FormRequest
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
            'phone' => 'nullable|string|min:11|max:15|regex:/^[0-9]+$/',
            'email' => 'required|email|max:200',
            'shown'  => 'required|max:200',
            'message' => 'required|max:200',
            'g-recaptcha-response' => 'required',
        ];
    }
    protected function prepareForValidation()
    {
        $this->merge([
            'message' => strip_tags($this->message, '<p><b><i><br>'), // Hanya izinkan tag ini
            'phone' => preg_replace('/[^0-9]/', '', $this->phone), // Hanya izinkan angka
        ]);
    }
}
