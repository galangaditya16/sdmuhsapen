<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BannerRequest extends FormRequest
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
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:1024',
            'title' => 'required',
        ];


    }

    public function attributes()
    {
        return [
            'title'  => 'Title',
            'image'  => 'Image',
        ];
    }

    public function messages()
    {
            return [
                'title.required'  => ':attribute must be filled',
                'image.required'  => ':attribute must be filled',
                'image.mimes' => ':attribute must be in the format: jpeg, png, jpg, gif.',
                'image.max' => ':attribute size must not exceed 1MB.',
            ];
    }
}
