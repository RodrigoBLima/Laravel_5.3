@extends('layout.site')

@section('titulo', 'Produtos')


@section('conteudo')
    <h3>Esta é a view index </h3>

    @foreach($contatos as $produto)
    <p>{{ $produto -> nome }}</p>
    <p>{{ $produto -> preco }}</p>

    @endforeach
 
 @endsection