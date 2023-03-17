<?php

namespace App\Http\Requests\admin;

use Illuminate\Foundation\Http\FormRequest;

class UpdateAdmin extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'id'                =>  'required|exists:account_admin,id',
            'full_name'         =>  'required|min:5',
            'so_dien_thoai'     =>  'required|digits:10|unique:account_admin,so_dien_thoai,' . $this->id,
            'email'             =>  'required|email|unique:account_admin,email,' . $this->id,
            'password'          =>  'nullable|min:6|max:30',
            're_password'       =>  'nullable|same:password',
            'gioi_tinh'         =>  'required|numeric|min:0|max:2',
            'hinh_anh'          =>  'required',
            'is_master'         =>  'required|boolean',
            'is_block'          =>  'required|boolean',
        ];
    }
}
