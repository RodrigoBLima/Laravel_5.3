@extends('layout.site')

@section('titulo', 'Produtos')


@section('conteudo')
    <div class="container">
          <h3 class="center">Editarprodutos </h3>
    </div>
    <div class="row">
        <form action="{{route('admin.produtos.atualizar',$registro->id)}}" enctype="multipart/form-data" method="post">
            {{csrf_field()}}
            <input type="hidden" name="_method" value="put">
              
                @include('admin.produtos._form')

            <button type="" class="btn deep-orange">Atualizar</button>
        </form>
    </div>


 @endsection