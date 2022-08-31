<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ShowLinkRequest extends FormRequest
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
            'url_link' => 'required | url',
            'url_title' => 'required ',



        ];
    }


    public function messages()
    {
        return[
            'url_link.required' => ' آدرس لینک نباید خالی باشد',
            'url_title.required' => 'عنوان لینک را وارد کنید',
            'url_link.url' => 'فرمت لینک صحیح نیست',




        ];
    }
}
