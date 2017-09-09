<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Produto;

class HomeController extends Controller
{
    public function index(){
        $produtos = Produto::all();
        return view('home', compact('produtos'));
    }
    public function produto($id){
        $produto = Produto::find($id);
        return view('detalhes.index', compact('produto'));
    }
}
