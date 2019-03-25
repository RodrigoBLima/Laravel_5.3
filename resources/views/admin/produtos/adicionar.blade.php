@extends('layout.site')

@section('titulo', 'Produtos')


@section('conteudo')
    <div class="container">
          <h3 class="center">Adicionar produtoss </h3>
    </div>
    <div class="row">
        <form action="{{route('admin.produtos.salvar')}}" enctype="multipart/form-data" method="post">
            {{csrf_field()}}

                @include('admin.produtos._form')

            <button type="" class="btn deep-orange">Salvar</button>
        </form>
    </div>


 @endsection