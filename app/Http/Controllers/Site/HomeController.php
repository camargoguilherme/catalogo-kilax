<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Produto;
use App\JsonKilaxJapan;
use Illuminate\Support\Collection;
use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;

class HomeController extends Controller
{
    public function index(){
        $produto = new Produto();
        $produtos = $produto->getAllProduct();

        return view('home', compact('produtos'));
    }
    public function produto($codbarra){
        $produt = new Produto();
        $produto = $produt->getProductById($codbarra);

        return view('detalhes.index', compact('produto'));
    }
}
