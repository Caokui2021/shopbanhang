<?php

namespace App\Http\Requests\bill;

use Illuminate\Foundation\Http\FormRequest;

class createBill extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'ship_address'   =>  'required',
            'ship_phone'     =>  'required|digits:10',
            'ship_fullname'  =>  'required',
        ];
    }
}
