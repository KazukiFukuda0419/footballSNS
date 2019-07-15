<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DeleteRequest extends FormRequest
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
        'num' => 'exists:people,id|integer|numeric',
        ];
    }
    
    public function messages(){
        return [
        'num.exists' => '存在するコメント番号を指定してください。',
        'num.integer' => '存在するコメント番号を指定してください。',
        'num.numeric' => '存在するコメント番号を指定してください。',
        ];
    }

    
}
