<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class LoginController extends Controller
{

    //listar formulario de login
    public function index(){
        return view('login.index');
    }

    //
    public function entrar(Request $req){
        //pegando todos os dados
        $dados =  $req->all();

        //teste de validacao
        if(Auth::attempt(['email'->$dados['email'],'password'=>$dados['senha']])){
            return redirect()->route('admin.cursos');

        }


        //redirecionar o usuario se nao der certo
        return redirect()->route('login.index');
    }

    //metodo para sair\logout
    public function sair(){

            Auth::logout();
            return redirect()->route('site.home');
    }
}
