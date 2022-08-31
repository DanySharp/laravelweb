<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class CommentRequest extends FormRequest
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
            'description'=>'required | min:4',
            'comment_name'=>'required',

            'comment_email'=>'required | email',
            'g-recaptcha-response' => 'required|captcha'
        ];
    }

    public function messages()
    {


        return [

            'comment_name.required'=>'نام خود را وارد کنید',
            'comment_email.required'=>'ایمیل خود را وارد نکرده اید',
            'comment_email.email'=>'ایمیل مورد نظر صحیح نیست',
            'description.required'=>'متن دیدگاه را وارد کنید',
            'description.min'=>' دیدگاه باید بیش از 4 کاراکتر باشد',
            'g-recaptcha-response.required' => 'تایید کنید ربات نیستید',

        ];
    }
}
