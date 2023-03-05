<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class StaffFormRequest extends FormRequest
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


            'name' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'contact' => 'required|string|regex:/9[6-8]{1}[0-9]{8}/|digits:10|distinct|unique:staff',
            'email' => 'required|string|max:255|unique:staff',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'gender' => 'required|in:Male,Female,Others',
            'dob' => 'required|date',

        ];

        return $rules;
    }
}
