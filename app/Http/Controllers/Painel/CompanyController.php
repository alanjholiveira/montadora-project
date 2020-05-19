<?php

namespace App\Http\Controllers\Painel;

use App\DataTables\CompanyDataTable as DataTable;
use App\Http\Controllers\Controller;
use App\Http\Requests\CompanyRequest as Request;
use App\Model\Company;
use \Illuminate\Http\Request as RequestHttp;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param DataTable $dataTable
     * @return mixed
     */
    public function index(DataTable $dataTable)
    {
        return $dataTable->render('companies.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('companies.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $company = Company::create($request->all());

        return redirect()->route('companies.show', $company)->with("success","Empresa criada com Sucesso!");
    }

    /**
     * Display the specified resource.
     *
     * @param  Company  $company
     * @return \Illuminate\View\View
     */
    public function show(Company $company)
    {
         return view('companies.view', ['company' => $company]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Company  $company
     * @return \Illuminate\View\View
     */
    public function edit(Company $company)
    {
        return view('companies.edit', ['company' => $company]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  Company  $company
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Company $company)
    {
        $company->update($request->all());

        return redirect()->route('companies.show', $company)->with("success","Empresa alterada com Sucesso!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param RequestHttp $request
     * @param Company $company
     * @return \Illuminate\View\View
     * @throws \Exception
     */
    public function destroy(RequestHttp $request, Company $company)
    {
        if($request->ajax()){
            return view('companies.destroy', ['company' => $company]);
        }else{
            $company->delete();
            return redirect()->route('companies.index');
        }
    }
}
