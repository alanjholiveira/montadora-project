<?php

namespace App\Http\Controllers\Painel;

use App\DataTables\EmployeeDataTable as DataTable;
use App\Http\Controllers\Controller;
use App\Http\Requests\EmployeeRequest as Request;
use App\Model\Employee;
use App\Model\Company;
use \Illuminate\Http\Request as RequestHttp;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param DataTable $dataTable
     * @return mixed
     */
    public function index(DataTable $dataTable)
    {
        return $dataTable->render('employees.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $companies = Company::All()->pluck('name', 'id');

        return view('employees.create', ['companies' => $companies]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $employee = Employee::create($request->all());

        return redirect()->route('employees.show', $employee);
    }

    /**
     * Display the specified resource.
     *
     * @param  Employee  $employee
     * @return \Illuminate\View\View
     */
    public function show(Employee $employee)
    {
        $companies = Company::All()->pluck('name', 'id');

         return view('employees.view', ['employee' => $employee, 'companies' => $companies]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Employee  $employee
     * @return \Illuminate\View\View
     */
    public function edit(Employee $employee)
    {
        $companies = Company::All()->pluck('name', 'id');

        return view('employees.edit', ['employee' => $employee, 'companies' => $companies]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Employee $employee)
    {
        $employee->update($request->all());

        return redirect()->route('employees.show', $employee);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param RequestHttp $request
     * @param Employee $employee
     * @return \Illuminate\View\View
     * @throws \Exception
     */
    public function destroy(RequestHttp $request, Employee $employee)
    {
        if($request->ajax()){
            return view('employees.destroy', ['employee' => $employee]);
        }else{
            $employee->delete();
            return redirect()->route('employees.index');
        }
    }
}
