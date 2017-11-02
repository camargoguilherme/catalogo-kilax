<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/
//Rotas para Pagina Home
Route::get('/', ['as'=>'site.home', 'uses'=>'Site\HomeController@index']);


//Rotas para Pagina de Login
Route::get('/login', ['as'=>'login.index', 'uses'=>'Site\LoginController@index']);
Route::get('/login/sair', ['as'=>'site.login.sair', 'uses'=>'Site\LoginController@sair']);
Route::post('/login/entrar', ['as'=>'site.login.entrar', 'uses'=>'Site\LoginController@entrar']);

//Rotas para acesso a Produto
Route::get('/detalhes/{id}', ['as'=>'detalhes.produto', 'uses'=>'Site\HomeController@produto']);

//Protege rotas contra acessos nao autorizados
Route::group(['middleware'=>'auth'], function(){
    //Rotas para Pagina de Cursos
    Route::group(['prefix' => 'admin'], function(){

        Route::group(['prefix' => 'produtos'], function(){
            /*

            Route::get('', ['as'=>'admin.cursos', 'uses'=>'Admin\CursoController@allProducts']);
            Route::get('adicionar', ['as'=>'admin.cursos.adicionar', 'uses'=>'Admin\CursoController@getProdutc']);
            Route::post('salvar', ['as'=>'admin.cursos.salvar', 'uses'=>'Admin\CursoController@saveProdutc']);
            Route::get('editar/{id}', ['as'=>'admin.cursos.editar', 'uses'=>'Admin\CursoController@updateProdutc']);
            Route::put('atualizar/{id}', ['as'=>'admin.cursos.atualizar', 'uses'=>'Admin\CursoController@updateProdutc']);
            Route::get('deletar/{id}', ['as'=>'admin.cursos.deletar', 'uses'=>'Admin\CursoController@deleteProdutc']);
            /*/
            Route::get('', ['as'=>'admin.produtos', 'uses'=>'Admin\ProdutoController@index']);
            Route::get('adicionar', ['as'=>'admin.produtos.adicionar', 'uses'=>'Admin\ProdutoController@adicionar']);
            Route::post('salvar', ['as'=>'admin.produtos.salvar', 'uses'=>'Admin\ProdutoController@salvar']);
            Route::get('editar/{id}', ['as'=>'admin.produtos.editar', 'uses'=>'Admin\ProdutoController@editar']);
            Route::put('atualizar/{id}', ['as'=>'admin.produtos.atualizar', 'uses'=>'Admin\ProdutoController@atualizar']);
            Route::get('deletar/{id}', ['as'=>'admin.produtos.deletar', 'uses'=>'Admin\ProdutoController@deletar']);

        });
    });

});


