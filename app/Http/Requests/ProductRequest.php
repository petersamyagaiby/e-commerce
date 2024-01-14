<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            "name" => "required|min:3",
            "price" => "required|numeric",
            "quantity" => "required|numeric",
            "pro_desc" => "required",
            "image" => "required"
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'Please enter the product name',
            'price.required' => 'Please enter the product price',
            'quantity.required' => 'Please enter the product quantity',
            'pro_desc.required' => 'Please enter the product description',
            'image.required' => 'Please enter the product image',
        ];
    }

    public function attributes(): array
    {
        return [
            "pro_desc" => "description",
        ];
    }
}
