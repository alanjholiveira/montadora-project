<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CompanyRequest extends FormRequest
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
            'name' => 'required',
            'fantasy' => 'required',
            'cnpj' => 'required|numeric',
            'ie' => 'required',
            'address' => 'required',
            'zip_code' => 'required',
            'city' => 'required',
            'state' => 'required',
            'country' => 'required',
            'phone' => 'required',
            'email' => 'required|email',
            'responsible' => 'required',
        ];
    }

    protected function getRedirectUrl()
    {
        $company = $this->route()->parameter('company');

        if($company){
            return route('companies.edit', $company);
        }else{
            return route('companies.create');
        }
    }
}
