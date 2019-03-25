@extends('layout.site')

@section('titulo', 'Produtos')


@section('conteudo')
    <div class="container">
          <h3 class="center">Lista de Produtos </h3>
    </div>

    
    <div class="row">
       <table>      
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nome</th>
                    <th>Descrição</th>
                    <th>Valor</th>
                    <th>Imagem</th>
                    <th>Publicado</th>
                    <th>Ação</th>
                </tr>
            </thead>
            <tbody>
            @foreach($registre as $registro)
            <tr>
                <td>{{$registro->id}}</td>
                <td>{{$registro->nome}}</td>
                <td>{{$registro->descricao}}</td>
                <td>{{$registro->valor}}</td>
                <td><img width="70px" src="{{asset($registro->imagem)}}" alt="{{$registro->nome}}"></td>
                <td>{{$registro->publicado}}</td>
                <td>
                    <a href="{{route('admin.produtos.editar',$registro->id)}}" class="btn deep-orange">Editar</a>
                    <a href="{{route('admin.produtos.deletar',$registro->id)}}" class="red">Excluir</a>
                </td>

            </tr>
            @endforeach
      
            </tbody>
      </table>
    </div>
    <div class="row">
        <a href="{{route('admin.produtos.deletar')}}" class="btn blue">Criar</a>
    </div>
 @endsection