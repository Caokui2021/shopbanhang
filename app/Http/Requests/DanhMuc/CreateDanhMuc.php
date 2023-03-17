<?php

namespace App\Http\Requests\DanhMuc;

use Illuminate\Foundation\Http\FormRequest;

class CreateDanhMuc extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'ten_danh_muc'      =>  'required|min:2',
            'slug_danh_muc'     =>  'required|min:2',
            'is_open'           =>  'required|boolean',
            'id_danh_muc_cha'   =>  'required',
            'hinh_anh'          =>  'required',

        ];
    }

    public function messages()
    {
        return [
            'required'  => ':attribute không được để trống!',
            'min'       => ':attribute nhỏ nhất 5 kí tự!',
            'boolean'   => ':attribute yes/no',
        ];
    }

    public function attributes()
    {
        return [
            'ten_danh_muc'      => 'Tên danh muc',
            'slug_danh_muc'     => 'Slug danh muc',
            'is_open'           => 'Tình trạng',
            'id_danh_muc_cha'   => 'Danh mục cha',
            'hinh_anh'          => 'Hình ảnh',
        ];
    }
}
