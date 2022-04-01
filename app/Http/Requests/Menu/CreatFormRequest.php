<?php

namespace App\Http\Requests\Menu;

use Illuminate\Foundation\Http\FormRequest;

class CreatFormRequest extends FormRequest
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
            'name'=>'required',
            'email'=>'required',
            'password'=>'required'
        ];
    }
    public function messages():array
    {
        return[
            'name.required'=>'vui lòng nhập tên ',
            'password.required'=>'vui lòng nhập tên ',
            'email.required'=>'vui lòng nhập tên '
        ];
    }
}
