<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class CategoryRequest extends FormRequest
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

//create slug  example slug+title or title=slug
    public function prepareForValidation()
    {
        if ($this->input('slug')){
            $this->merge(['slug'=>make_slug($this->input('slug'))]);
        }
        else
        {
            $this->merge(['slug'=>make_slug($this->input('title'))]);
        }
    }

    public function rules()
    {
        return [
            'title'=>'required',
            'slug'=>Rule::unique('categories')->ignore(request()->category),

        ];
    }

    public function messages()
    {
        return [
            'title.required'=>'عنوان را وارد کنید',
            'title.min'=>'عنوان باید بیش از 5 کاراکتر باشد',
            'slug.unique'=>'آدرس پست نباید تکراری باشد',



        ];
    }

}
