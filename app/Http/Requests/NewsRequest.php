<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NewsRequest extends FormRequest
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
            'title' => 'required|max:255',
            'title_translite' => 'required|max:255',
            'id_category' =>  'required|integer',
            'body' => 'required',
            'body_translite' => 'required',
        ];
    }
    public function attributes()
    {
        return [
            'title'              => 'Title (ID)',
            'title_translite'    => 'Title (EN)',
            'id_category' 	    => 'Category',
            'body'              => 'Body(ID)',
            'body_translite'    => 'Body(EN)'
        ];
    }
    public function messages()
    {
        return [
            'title.required' => ':attribute wajib disi.',
            'title.max'      => ':attribute tidak boleh lebih dari 100 karakter.',
            'title_translite.required' => ':attribute wajib disi.',
            'title_translite.max'      => ':attribute tidak boleh lebih dari 100 karakter.',
            'image.required' => 'Gambar harus diunggah.',
            'image.image' => 'File yang diunggah harus berupa gambar.',
            'image.mimes' => 'Gambar harus berformat: jpeg, png, jpg, gif, svg.',
            'image.max' => 'Ukuran gambar tidak boleh lebih dari 2MB.',
            'body.required' => ':attribute wajib disi.',
            'body_translite.required' => ':attribute wajib disi.',
        ];
    }
}
