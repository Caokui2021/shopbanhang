<?php

namespace App\Http\Requests\cart;

use Illuminate\Foundation\Http\FormRequest;

class UpdateQtyRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'id'            =>  'required|exists:chi_tiet_don_hangs,id',
            'so_luong_mua'  =>  'required|numeric|min:1',
        ];
    }
}
