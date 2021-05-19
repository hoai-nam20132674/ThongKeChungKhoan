<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class editPasswordRequest extends FormRequest
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
            
            
            'confirm_password'=>'same:password'
            
        ];
    }
    public function messages(){
        return [
            
            'confirm_password.same'=>'Xác thực mật khẩu không chính xác'
            
        ];
    }
}
