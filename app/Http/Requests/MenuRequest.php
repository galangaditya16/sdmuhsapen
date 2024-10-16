<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MenuRequest extends FormRequest
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
            'menu_name' => 'required|max:255',
            'route'     => 'required|max:255',
            'icon'      => 'required|max:255',
            'order'     => 'required|max:10|numeric',
        ];
    }
    public function attributes()
    {
        return [
            'menu_name'    => 'Nama Menu',
            'route' 	   => 'Route',
            'icon' 	       => 'Icon',
            'order'        => 'Order'
        ];
    }
    public function messages()
    {
        return [
            'menu_name.required' => ':attribute wajib diisi.',
            'menu_name.max'      => ':attribute tidak boleh lebih dari 255 karakter.',
            'route.required'     => ':attribute wajib diisi.',
            'route.max'          => ':attribute tidak boleh lebih dari 255 karakter.',
            'icon.required'      => ':attribute wajib diisi.',
            'icon.max'           => ':attribute tidak boleh lebih dari 255 karakter.',
            'order.required'     => ':attribute wajib diisi.',
            'order.max'          => ':attribute tidak boleh lebih dari 10 karakter.',
            'order.numeric'      => ':attribute harus berupa angka.',
        ];
    }

 
}
