<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryContentRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }


    protected function prepareForValidation()
    {
        // Menggabungkan data 'image' ke 'icon' sebelum validasi
        $this->merge([
            'icon' => $this->input('image'),
        ]);
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
            'name' => 'required|max:100',
            'slug' => 'required|max:100',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'order' => 'nullable|numeric|max:2'
        ];
        
    }
    public function attributes()
    {
        return [
            'name'    => 'Name Category Order',
            'slug' 	   => 'Slug',
            'image'    => 'Icon',
            'order'    => 'Order'
        ];
    }
    public function messages()
    {
        return [
            'name.required' => ':attribute wajib disi.',
            'name.max'      => ':attribute tidak boleh lebih dari 100 karakter.',
            'slug.required' => ':attribute wajib disi.',
            'slug.max'      => ':attribute tidak boleh lebih dari 100 karakter.',
            'order.max'      => ':attribute tidak boleh lebih dari 100 karakter.',
            'order.numeric'      => ':attribute Harus Berupa Angka.',
            // 'image.required' => 'Gambar harus diunggah.',
            'image.image' => 'File yang diunggah harus berupa gambar.',
            'image.mimes' => 'Gambar harus berformat: jpeg, png, jpg, gif, svg.',
            'image.max' => 'Ukuran gambar tidak boleh lebih dari 2MB.',
        ];
    }
}
