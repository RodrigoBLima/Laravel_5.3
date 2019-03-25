<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produtos;

class ContatoController extends Controller
{

    public function index(){
        $contatos = [
            (object)["nome" => "Lindi", "preco"=> "55009"],
            (object)["nome" => "Mari", "preco"=> "15000"]
            
        ];
        $produto = new \App\Produtos();
        dd($produto ->lista());

        //direcionando o metodo para a view
        return view ('contato.index', compact('contatos'));
    }

    //post
    public function criar(Request $req){
        dd($req)-> all();
        return "criar contato controller";
    }

    //put
    public function editar(){
        return "editar contato controller";
    }

}
