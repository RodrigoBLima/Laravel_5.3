<div class="input-field">
    <input type="text" name="nome" value="{{isset($registro->nome) ? $registro->nome : ''}}">
    <label for="">Nome</label>
</div>

<div class="input-field">
    <input type="text" name="descricao" value="{{isset($registro->descricao) ? $registro->descricao : ''}}">
    <label for="">Descrição</label>
</div>

<div class="input-field">
    <input type="text" name="valor" value="{{isset($registro->valor) ? $registro->valor : ''}}">
    <label for="">Valor</label>
</div>

<div class="file-field input-field">
      <div class="btn blue">
        <span>Imagem</span>
        <input type="file" name="imagem">
      </div>
      <div class="file-path-wrapper">
        <input class="file-path validate" type="text">
      </div>
</div>
@if(asset())
<div class="input-field">
<img width="70px" src="{{asset(registro->imagem)}}" alt="">
</div>
@endif

<div class="input-field">
<p>
    <input name="publicar" type="checkbox" {{isset($registro->publicado) && $registro->publicado == 'sim' ? 'check' : '' }} value="true">
    <label for="">Publicar?</label>
 </p>   
 <br><br>
</div>

