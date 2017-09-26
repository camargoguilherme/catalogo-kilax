<?php

namespace App\Http\Controllers\Site;

use App\Imagem;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Produto;

class HomeController extends Controller
{
    public function index(){
        $produtos = Produto::all();
        $imagems = Imagem::all();
        return view('home', compact('produtos'), compact('imagems'));
    }
    public function produto($id){
        $produto = Produto::find($id);
        $imagems = Imagem::where('id_produto', $id)->get();
        return view('detalhes.index', compact('produto'), compact('imagems'));
    }
}
