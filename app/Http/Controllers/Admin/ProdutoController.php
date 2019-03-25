<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Produto;

class ProdutoController extends Controller
{
    public function index(){

        $registre = Produto::all();

        return view('admin.produtos.index',compact('registro'));
    }
    //metodo para adicionar produtos
    public function adicionar(){
        return view('admin.produtos.adicionar');
    }

     //metodo para salvar produtos
     public function salvar(Request $req){
        
        //teste pata ver se o produto esta publicado ou nao
        if(isset($dados['publicado'])){
            $dados['publicado'] = 'sim';
        }else{
            $dados['publicado'] = 'nao';
        }

        //validacao da imagem
        if($req->hasFile('imagem')){
            $imagem = $rew -> file('imagem');
            $num = rand(1111,9999);
            $dir = "img/produtos";
            $ex = $imagem->guessClientExtension();
            $nomeImagem = "imagem_".$num.".".$ex;
            $imagem->move($dir,$nomeImagem);
            $dados['imagem'] = $dir."/".$nomeImagem;
        }

        Produtos::create($dados);
        return redirect()->route('admin.produtos');

    }


    //metodo para editar os produtos
    public function editar($id){
        $registro = Produtos::find($id);
        return view('admin.produtos.editar',compact('registro'));
    }
    public function atualizar(Request $req,$id){
        $dados = $req->all();
        
        //teste pata ver se o produto esta publicado ou nao
        if(isset($dados['publicado'])){
            $dados['publicado'] = 'sim';
        }else{
            $dados['publicado'] = 'nao';
        }

        //validacao da imagem
        if($req->hasFile('imagem')){
            $imagem = $rew -> file('imagem');
            $num = rand(1111,9999);
            $dir = "img/produtos";
            $ex = $imagem->guessClientExtension();
            $nomeImagem = "imagem_".$num.".".$ex;
            $imagem->move($dir,$nomeImagem);
            $dados['imagem'] = $dir."/".$nomeImagem;
        }

        //buscando por id o produto para entar poder atualiza-lo
        Produtos::find($id)->update($dados);
        //mandando o usuario para a listagem de produtos
        return redirect()->route('admin.produtos');

    }

    //metodo para deletar os produtos
    public function deletar()
        {
            //passando por id a exclusão do produto
            Produto::find($id)->delete();
            return redirect()->route('admin.produtos');
        }



}
