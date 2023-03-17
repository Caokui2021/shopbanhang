<?php

namespace App\Http\Requests\infomation;

use Illuminate\Foundation\Http\FormRequest;

class profileRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'id'            => 'required|exists:customers,id',
            'full_name'     => 'required|min:5',
            'phone'         => 'required|digits:10',
            'email'         => 'required|email',
            'sex'           => 'required|boolean',
            'dob'           => 'required|date',
        ];
    }
}
