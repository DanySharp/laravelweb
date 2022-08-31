<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'email' => 'required | email',
            'roles' => 'required',
            'status' => 'required',
            'password' => 'required | min:4',

        ];
    }


    public function messages()
    {
        return[
          'name.required' => 'نام و نام خانوادگی وارد نشده است',
          'email.required' => 'ایمیل را وارد کنید',
          'roles.required' => 'نقش را انتخاب نکرده اید',
          'status.required' => 'وضعیت مشخص نیست',
          'password.required' => 'کلمه عبور را وارد کنید',


        ];
    }
}
