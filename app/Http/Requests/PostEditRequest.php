<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class PostEditRequest extends FormRequest
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
            'title'=>'required | min:3',
            'slug'=>'unique:posts',
            'slug'=>\Illuminate\Validation\Rule::unique('posts')->ignore(request()->post),
            'description'=>'required',

            'category'=>'required',
            'status'=>'required',
        ];
    }

    public function messages()
    {
        return [
            'title.required'=>'عنوان را وارد کنید',
            'title.min'=>'عنوان باید بیش از 3 کاراکتر باشد',
            'slug.unique'=>'آدرس پست نباید تکراری باشد',
            'description.required'=>'متن را وارد کنید',

            'category.required'=>'دسته بندی انتخاب نشده است',
            'status.required'=>'وضعیت انتخاب نشده است',


        ];
    }
}
