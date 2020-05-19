<?php

namespace App\Http\Controllers\Painel;

use App\Http\Controllers\Controller;
use App\Model\Employee;
use App\Rules\CheckOldPassword;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    /**
     * View Form Alterar Senha
     * @return \Illuminate\View\View
     */
    public function showChangePassword()
    {
        return view('changePassword');
    }

    /**
     * Alterar senha do Funcionario Logado
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function changePassword(Request $request){

        $request->validate([
            'oldPassword' => ['required', new CheckOldPassword],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'password-confirm' => ['same:password'],
        ]);

        $user = Auth::user();
        $user->password = $request->password;
        $user->save();

        return redirect()->back()->with("success","Senha Alterada com Sucesso!");

    }

}
