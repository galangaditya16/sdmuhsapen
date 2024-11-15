<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SliderRequest extends FormRequest
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
         'image'           => 'mimes:jpeg,jpg,png,jpg,gif,svg|max:2048',
         'title'           => 'required|max:255',
        ];
    }
    public function attributes()
    {
        return [
            'image'              => 'Image',
            'title'              => 'Title'
        ];
    }
    public function messages(){
        return [
            'title.required'           => ':attribute Wajib di isi',
            'title.max'                => ':attribute tidak boleh lebih dari 100 karakter',
            // 'image.required'           => 'Gambar harus diunggah.',
            // 'image.image'              => 'File yang diunggah harus berupa gambar.',
            'image.mimes'              => 'Gambar harus berformat: jpeg, png, jpg, gif, svg.',
            'image.max'                => 'Ukuran gambar tidak boleh lebih dari 2MB.',
        ];
    }
}
