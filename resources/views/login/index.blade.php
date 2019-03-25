@extends('layout.site')

@section('titulo', 'Inicio')


@section('conteudo')
<div class="container">
          <h3 class="center">Entrar </h3>
    </div>
    <div class="row">
        <form action="{{route(site.login.entrar')}}"  method="post">
            {{csrf_field()}}

            <div class="input-field">
                <input type="email" name="email" >
                <label for="">email</label>
            </div>
            <div class="input-field">
                <input type="password" name="senha" >
                <label for="">senha</label>
            </div>

               

            <button type="" class="btn deep-orange">Entrar</button>
        </form>
    </div>

            
  
 @endsection