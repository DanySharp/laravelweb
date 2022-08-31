<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ReqestContact extends FormRequest
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


    public function rules()
    {
        return [
            'title'=>'required',
            'matn'=>'required',


        ];
    }

    public function messages()
    {
        return [
            'title.required'=>'عنوان را وارد کنید',
            'matn.required'=>'متن را وارد کنید',



        ];
    }
}
