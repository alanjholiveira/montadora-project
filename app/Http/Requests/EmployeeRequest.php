<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmployeeRequest extends FormRequest
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
            'date_birth' => 'required',
            'gender' => 'required',
            'cpf' => 'required',
            'occupation' => 'required',
            'salary' => 'required',
            'address' => 'required',
            'zip_code' => 'required',
            'city' => 'required',
            'state' => 'required',
            'country' => 'required',
            'phone' => 'required',
            'email' => 'required|email',
            'situation' => 'required',
            'company_id' => 'required',
        ];
    }

    protected function getRedirectUrl()
    {
        $employee = $this->route()->parameter('employee');

        if($employee){
            return route('employees.edit', $employee);
        }else{
            return route('employees.create');
        }
    }
}
