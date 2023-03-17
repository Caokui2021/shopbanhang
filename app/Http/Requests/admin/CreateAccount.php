<?php

namespace App\Http\Requests\admin;

use Illuminate\Foundation\Http\FormRequest;

class CreateAccount extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'full_name'         =>  'required|min:5',
            'so_dien_thoai'     =>  'required|numeric|digits:10|unique:account_admin,so_dien_thoai',
            'email'             =>  'required|email|unique:account_admin,email',
            'password'          =>  'required|min:6|max:30',
            're_password'       =>  'required|same:password',
            'gioi_tinh'         =>  'required|numeric|min:0|max:2',
            'is_master'         =>  'required|boolean',
            'is_block'          =>  'required|boolean',
        ];
    }

    public function messages()
    {
        return [
            'required'  => ':attribute không được để trống!',
            'min'       => ':attribute nhỏ nhất 5 kí tự!',
            'digits'    => ':attribute tối thiểu 10 kí tự!',
            'unique'    => ':attribute đã tồn tại trong hệ thống!',
            'email'     => ':attribute không đúng định dạng!',
            'max'       => ':attribute tối đa 30 kí tự!',
            'boolean'   => ':attribute yes/no!',
            'same'      => ':attribute không giống',
        ];
    }

    public function attributes()
    {
        return [
            'full_name'         => 'Họ và tên',
            'so_dien_thoai'     => 'Số điện thoại',
            'email'             => 'Email',
            'password'          => 'Mật khẩu',
            're_password'       => 'Mật khẩu nhập lại',
            'gioi_tinh'         => 'Giới tính',
            'is_master'         => 'Quyền quản trị',
            'is_block'          => 'Tình trạng',
        ];
    }
}
