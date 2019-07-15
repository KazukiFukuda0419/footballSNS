<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HelloRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        if($this->path() == 'hello/add'){
            return true;
            
        } else {
            return false;
            
        }
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'between:0,10',
            'comment' =>'between:0,10',
        ];
    }
    
    public function messages(){
        return [
          'name.between' => '名前は１０文字以内にしてください！',
          'comment.between' => 'コメントは４００文字以内にしてください！',
        ];
    }
}
