<?php

namespace App\Http\Controllers\Painel;

use App\DataTables\AutomobileDataTable as DataTable;
use App\Http\Controllers\Controller;
use App\Http\Requests\AutomobileRequest as Request;
use App\Model\Automobile;
use App\Model\Category;
use App\Model\Company;
use \Illuminate\Http\Request as RequestHttp;

class AutomobileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param DataTable $dataTable
     * @return mixed
     */
    public function index(DataTable $dataTable)
    {
        return $dataTable->render('automobiles.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $categories = Category::All()->pluck('name', 'id');
        $companies = Company::All()->pluck('name', 'id');

        return view('automobiles.create', ['categories' => $categories, 'companies' => $companies]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $automobile = Automobile::create($request->all());

        return redirect()->route('automobiles.show', $automobile);
    }

    /**
     * Display the specified resource.
     *
     * @param  Automobile  $automobile
     * @return \Illuminate\View\View
     */
    public function show(Automobile $automobile)
    {
        $categories = Category::All()->pluck('name', 'id');
        $companies = Company::All()->pluck('name', 'id');

         return view('automobiles.view', ['automobile' => $automobile, 'categories' => $categories, 'companies' => $companies]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Automobile  $automobile
     * @return \Illuminate\View\View
     */
    public function edit(Automobile $automobile)
    {
        $categories = Category::All()->pluck('name', 'id');
        $companies = Company::All()->pluck('name', 'id');

        return view('automobiles.edit', ['automobile' => $automobile, 'categories' => $categories, 'companies' => $companies]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  Automobile  $automobile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Automobile $automobile)
    {
        $automobile->update($request->all());

        return redirect()->route('automobiles.show', $automobile);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param RequestHttp $request
     * @param Automobile $automobile
     * @return \Illuminate\View\View
     * @throws \Exception
     */
    public function destroy(RequestHttp $request, Automobile $automobile)
    {
        if($request->ajax()){
            return view('automobiles.destroy', ['automobile' => $automobile]);
        }else{
            $automobile->delete();
            return redirect()->route('automobiles.index');
        }
    }
}
