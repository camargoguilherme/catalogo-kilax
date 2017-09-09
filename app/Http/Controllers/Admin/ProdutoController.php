<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Produto;

class ProdutoController extends Controller
{
    public function index(){

        $registros = Produto::all();
        return view ('admin.produtos.index', compact('registros'));
    }

    public function adicionar(){

        return view('admin.produtos.adicionar');
    }

    public function salvar(Request $req){

        $dados = $req->all();

        if($dados['descricao'] != null) {
            if (isset($dados['publicado'])) {
                $dados['publicado'] = 'sim';
            } else {
                $dados['publicado'] = 'nao';
            }


            Produto::create($dados);
        }
        return redirect()->route('admin.produtos');
    }

    public function atualizar(Request $req, $id){

        $dados = $req->all();

        if (isset($dados['publicado'])){
            $dados['publicado'] = 'sim';
        }else{
            $dados['publicado'] = 'nao';
        }


        if ($req->hasFile('imagem')){
            $imagem = $req->file('imagem');
            $num = rand(1111, 9999);
            $dir = "img/produtos/";
            $ex = $imagem->guessClientExtension();
            $nomeImagem = "imagem_".$num.".".$ex;
            $imagem->move($dir, $nomeImagem);
            $dados['imagem'] = $imagem;
        }
        Produto::find($id)->update($dados);
        return redirect()->route('admin.produtos');
    }

    public function editar($id){

        $registro = Produto::find($id);

        return view ('admin.produtos.editar', compact('registro'));
    }

    public function deletar($id){
        Produto::find($id)->delete();
        return redirect()->route('admin.produtos');
    }


}
