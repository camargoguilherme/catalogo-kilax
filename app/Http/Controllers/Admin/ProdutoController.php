<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Imagem\ImagemController;
use App\Http\Controllers\Controller;
use App\JsonKilaxJapan;
use App\Produto;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;



class ProdutoController extends Controller
{


    public function index()
    {
        $produto = new Produto();
        $produtos = $produto->getAllProduct();


        return view ('admin.produtos.index', compact('produtos'));
    }

    public function adicionar(){
        return view('admin.produtos.adicionar');
    }

    public function salvar(Request $req){
        $produto = new Produto();
        $produto->addProdutc($req->all());

        return redirect()->route('admin.produtos');
    }

    public function atualizar(Request $req, $codbarra)
    {
        $produto = new Produto();
        $produto->updateProductById($req->all(), $codbarra);

        return redirect()->route('admin.produtos');
    }

    public function editar($codbarra){

        $produt = new Produto();
        $produto = $produt->getProductById($codbarra);

        return view ('admin.produtos.editar', compact('produto'));
    }

    public function deletar($codbarra){
        $produto = new Produto();
        dd($codbarra);
        $produto->removeProductById($codbarra);

        return redirect()->route('admin.produtos');
    }

}
