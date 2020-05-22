<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SliderRequest extends FormRequest
{
    private $table = 'slider';
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
        $id = $this->id;
        $condThumb = 'bail|required|image|max:5000';
        $condName = "bail|required|between:5,100|unique:$this->table,name";
        if(!empty($id)){ // edit
            $condThumb = 'bail|image|max:5000';
            $condName .= ",$id";
        }
        return [
            'name' => $condName,
            'description' => 'bail|required|min:5',
            'link' => 'bail|required|min:5|url',
            'status' => 'bail|required|in:active,inactive',
            'thumb' => $condThumb
        ];
    }

    public function messages()
    {
        return [
            // 'name.required' => 'Vui lòng nhập tên người dùng của bạn',
            // 'name.min' => 'Name :input tối thiểu :min ký tự tiếng Anh',
        ];
    }

    public function attributes()
    {
        return [
            // 'description' => 'Mô tả: ',
        ];
    }
}
