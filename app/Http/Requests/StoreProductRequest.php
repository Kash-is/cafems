<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        $rules= [
            'name'=>'required|string|max:255',
            'buying_price'=>'string|required',
            'price'=>'string|required',
            'quantity'=>'string|required',
            'category_id' => 'required',
            'image'=>'nullable|image|mimes:jpeg,png,webp, jpg,gif,svg|max:2048',
        ];

        return $rules;

    }
}
