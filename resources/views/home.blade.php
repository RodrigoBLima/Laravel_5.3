@extends('layout.site')

@section('titulo', 'Inicio')


@section('conteudo')
    <div class="container">
          <h3 class="center">Lista de Produtos </h3>
    </div>

    <div class="row">
    @foreach($produtos as $produto)
        <div class="col s12 m4">
          <div class="card">
            <div class="card-image">
            <img src="{{asset($produto->imagem)}}">
            
            </div>
            <div class="card-content">
            <h4>{{$produto->$nome}}</h4>
            <p>{{$produto->$descricao}}</p>
            </div>
            <div class="card-action">
            <a href="#">Ver Mais...</a>
            </div>
        </div>
        </div>
      @endforeach  
    </div>
    <div class="row" text-align="center" >
        {{$produtos->links()}}
    </div>
            
  
 @endsection