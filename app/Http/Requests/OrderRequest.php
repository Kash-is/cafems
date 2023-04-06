<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrderRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name'=>'required|string|max:255',
            'table_id'=>'required',
            'staff_id'=>'required',
            'total'=>'string|required',
            'discount'=>'percentage',
            'status'=> 'required|in:pending,completed',
            'KOT_status'=> 'required|in:pending,completed',
            'price'=>'string|required',
            'quantity'=>'string|required',
            'product_id'=>'required'


        ];
    }
}
