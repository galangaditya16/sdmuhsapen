<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryProgramRequest extends FormRequest
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

            'title' => 'required|max:100',
            'title_translite' => 'required|max:100',
            'slug' => 'max:100',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ];
    }
    public function attributes()
    {
        return [
            'title'              => 'Name Category',
            'title_translite'    => 'Name Category',
            'slug' 	   => 'Slug',
            'image'    => 'Icon'
        ];
    }
    public function messages()
    {
        return [
            'title.required' => ':attribute wajib disi.',
            'title.max'      => ':attribute tidak boleh lebih dari 100 karakter.',
            'title_translite.required' => ':attribute wajib disi.',
            'title_translite.max'      => ':attribute tidak boleh lebih dari 100 karakter.',
            'slug.required' => ':attribute wajib disi.',
            'slug.max'      => ':attribute tidak boleh lebih dari 100 karakter.',
            'image.required' => 'Gambar harus diunggah.',
            'image.image' => 'File yang diunggah harus berupa gambar.',
            'image.mimes' => 'Gambar harus berformat: jpeg, png, jpg, gif, svg.',
            'image.max' => 'Ukuran gambar tidak boleh lebih dari 2MB.',
        ];
    }
}
