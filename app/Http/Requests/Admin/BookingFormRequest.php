<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class BookingFormRequest extends FormRequest
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
            'name' => 'required|max:255',
            'date'  => 'required|date_format:Y-m-d',
            'table' => 'required|in:1,2,3,4,5,6,7,8,9,10',
            'arrivaltime' => 'required|date_format:H:i',
            'departuretime' => 'required|date_format:H:i',
            'contact' => 'required|regex:~9[6-8]{1}[0-9]{8}~|digits:10|distinct|unique:booking',
            'email' => 'required|max:255|unique:booking',
            'status' => 'required|in:reserved,unreserved'




        ];

        return $rules;
    }
}
