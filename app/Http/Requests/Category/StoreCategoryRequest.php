<?php

namespace App\Http\Requests\Category;

use Illuminate\Foundation\Http\FormRequest;

class StoreCategoryRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return True;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'name'=> 'required|unique:categories'
        ];
    }
    public function messages(): array{
        return [
            'name.required' => 'Tên danh mục không được để trống',
            'name.unique' => "Tên $this->name danh mục đã tồn tại",
        ];
    }
}
