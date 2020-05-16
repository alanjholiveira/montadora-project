<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
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
            'name' => 'required'
        ];
    }

    protected function getRedirectUrl()
    {
        $category = $this->route()->parameter('category');

        if($category){
            return route('categories.edit', $category);
        }else{
            return route('categories.create');
        }
    }
}
