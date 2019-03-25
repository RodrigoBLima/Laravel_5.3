<?php



//metodo para a pagina inicial do projeto
Route::get('/', ['site.home' => 'Site\HomeController@index']);

//metodo para a pagina de login do usuario e validar
Route::get('/login', ['site.login' => 'Site\LoginController@index']);
Route::post('/login/entrar', ['site.login.entrar' => 'Site\LoginController@entrar']);
Route::get('/login/sair', ['site.login.sair' => 'Site\LoginController@sair']);


//mandando usuario para o contatocontroller
Route::get('/contato', ['uses' => 'ContatoController@index']);

//
Route::post('/contato', ['uses' => 'ContatoController@criar']);

//
Route::put('/contato',['uses' => 'ContatoController@editar']);


//limitando rotas para o acesso não ser publico
Route::group(['middleware'=>'auth'], function(){
// rota do crud
Route::get('/admin/produtos', ['as' => 'admin.produtos', 'uses' => 'Admin\ProdutoController@index']);

// rota do crud para add
Route::get('/admin/produtos/adicionar', ['as' => 'admin.produtos.adicionar', 'uses' => 'Admin\ProdutoController@adicionar']);

// rota do crud para salvar
Route::post('/admin/produtos/salvar', ['as' => 'admin.produtos.salvar', 'uses' => 'Admin\ProdutoController@salvar']);

// rota do crud para editar
Route::get('/admin/produtos/editar/{id}', ['as' => 'admin.produtos.editar', 'uses' => 'Admin\ProdutoController@editar']);
Route::put('/admin/produtos/atualizar/{id}', ['as' => 'admin.produtos.atualizar', 'uses' => 'Admin\ProdutoController@atualizar']);

// rota do crud para excluir
Route::get('/admin/produtos/deletar/{id}', ['as' => 'admin.produtos.deletar', 'uses' => 'Admin\ProdutoController@deletar']);
});











