<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Imagem\ImagemController;
use App\Http\Controllers\Controller;
use App\Imagem;
use App\Produto;
use Illuminate\Http\Request;


class ProdutoController extends Controller
{
    public function index(){

        $registros = Produto::orderBy('id')->get();
        $imagems = ImagemController::find();

        return view ('admin.produtos.index', compact('registros'), compact('imagems'));
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

            if (isset($dados['imagem'])) {
                if($req->hasFile('imagem')){
                    ImagemController::adicionar($req);
                }
            }

        }
        return redirect()->route('admin.produtos');
    }

    public function atualizar(Request $req, $id)
    {

        $dados = $req->all();

        if (isset($dados['publicado'])) {
            $dados['publicado'] = 'sim';
        } else {
            $dados['publicado'] = 'nao';
        }
        if (isset($dados['imagem'])) {
            if($req->hasFile('imagem')){
                ImagemController::editar($req, $id);
            }
        }
        Produto::find($id)->update($dados);
        return redirect()->route('admin.produtos');
    }

    public function editar($id){

        $registro = Produto::find($id);

        return view ('admin.produtos.editar', compact('registro'));
    }

    public function deletar($id){

        ImagemController::deletarAll($id);
        Produto::find($id)->delete();
        return redirect()->route('admin.produtos');
    }


}
