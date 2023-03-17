<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    protected function prepareForValidation()
    {
        if(strpos($this->email, '+')) {
            $first = substr($this->email, 0, strpos($this->email, '+'));
            $last  = substr($this->email, strpos($this->email, '@'));
            $real_email = $first . $last;
            $this->email     = $real_email;
        }
        if(strpos($this->email, '.')) {
            $first = substr($this->email, 0, strpos($this->email, '@'));
            $first = str_replace('.', '', $first);
            $last  = substr($this->email, strpos($this->email, '@'));
            $real_email = $first . $last;
        }

        $this->merge([
            'real_email' => $real_email,
        ]);

    }

    public function rules()
    {
        return [
            'full_name'     => 'required|min:5',
            'phone'         => 'required|digits:10',
            'email'         => 'required|email',
            'real_email'    => 'required|unique:customers,real_email',
            'sex'           => 'required|boolean',
            'dob'           => 'required|date',
            'password'      => 'required|min:6|max:30',
            're_password'   => 'required|same:password',
        ];
    }
}
