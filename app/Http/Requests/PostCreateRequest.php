<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class PostCreateRequest extends FormRequest
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

            'description'=>'required',
            'first_photo'=>'required',
            'category'=>'required',
            'status'=>'required',
        ];
    }

    public function message()
    {
        return [
          'title.required'=>'عنوان را وارد کنید',
          'title.min'=>'عنوان باید بیش از 3 کاراکتر باشد',
          'title.slug'=>'آدرس پست نباید تکراری باشد',
          'description.required'=>'متن را وارد کنید',
          'first_photo.required'=>'تصویر را انتخاب کنید',
          'category.required'=>'دسته بندی انتخاب نشده است',
          'status.required'=>'وضعیت انتخاب نشده است',


        ];
    }
}
