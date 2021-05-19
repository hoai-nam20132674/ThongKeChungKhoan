<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class editProjectCategorieRequest extends FormRequest
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
            
            'url' => 'unique:product_cates,url|unique:projects,url|unique:service_cates,url|unique:services,url|unique:blog_cates,url|unique:blogs,url|unique:products,url|unique:project_cates,url,'.$this->id,

            
            
        ];
    }
    public function messages(){
        return [
            
            'url.unique' => 'Đường dẫn này đã được sử dụng'
            
        ];
    }
}
