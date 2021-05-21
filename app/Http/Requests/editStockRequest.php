<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class editStockRequest extends FormRequest
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
            
            'ma' => 'unique:stocks,ma,'.$this->id,

            
            
        ];
    }
    public function messages(){
        return [
            
            'ma.unique' => 'Mã chứng khoán này đã được sử dụng'
            
        ];
    }
}
