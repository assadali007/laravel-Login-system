<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MakeFormRequest extends FormRequest
{

    // ==================================================================
    public function rules()
    {
        return [
                'text_username'=>'required|email|max:30',
                'text_telephone' =>'required|min:4|max:20',
                'text_password'=>'required|max:10',
        ];
    }
    // =======================================================================
    public function messages()
    {
        return [
            'text_username.required'=> 'this field is required',
            'text_username.email' =>'please enter the valid email',
            'text_username.max' =>'please only required 30 field',
             'text_password.required' => 'your password is required'
        ];

    }
}
