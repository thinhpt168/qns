<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserPostRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required',
            'account' => 'required|unique:users',
            'password' => 'required',
            'phone' => 'required|unique:users'
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Tên không được để trống',
            'account.required' => 'Tài khoản không được để trống',
            'account.unique' => 'Tài khoản đã được sử dụng',
            'password.required' => 'Mật khẩu không được để trống',
            'phone.unique' => 'Số điện thoại đã được sử dụng',
            'phone.required' => 'Số điện thoại không được để trống'
        ];
    }
}
