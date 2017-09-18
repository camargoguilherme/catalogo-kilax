<?php

namespace App\Http\Controllers\Imagem;
use App\Imagem;
use App\Produto;
use File;
use App\Http\Controllers\Controller;

class ImagemController extends Controller
{
    public static function adicionar($req){
        $dados = $req->all();
        if ($req->hasFile('imagem')){

            $imagem = $req->file('imagem');
            $num = rand(1, 999999);
            $dir = "img/produtos";
            $ex = $imagem->guessClientExtension();
            $ex = strtolower ( $ex );
            if ( strstr ( '.jpg;.jpeg;.gif;.png', $ex ) ){
                $nomeImagem = "imagem_".$num.".".$ex;
                $imagem->move($dir, $nomeImagem);
                $foto['descricao'] = "imagem_".$num.".".$ex;
                $foto['imagem'] = $dir . "/" . $nomeImagem;
                $foto['capa'] = 'sim';
                $produto = Produto::where('codbarra', $dados['codbarra'])->first();
                $foto['id_produto'] = $produto['id'];
                Imagem::create($foto);
            }
        }
    }

    public static function editar($req, $id){

        if ($req->hasFile('imagem')){
            $imagem = $req->file('imagem');
            $num = rand(1, 999999);
            $dir = "img/produtos";
            $ex = $imagem->guessClientExtension();
            $ex = strtolower ( $ex );


            if ( strstr ( '.jpg;.jpeg;.gif;.png', $ex ) ){
                $nomeImagem = "imagem_".$num.".".$ex;
                $imagem->move($dir, $nomeImagem);
                $foto['descricao'] = "imagem_".$num.".".$ex;
                $foto['imagem'] = $dir . "/" . $nomeImagem;
                $foto['capa'] = 'sim';
                $foto['id_produto'] = $id;
                Imagem::where([
                        ['id_produto', $id
                        ],
                        ['capa','sim']
                    ]
                )->update(['capa' => 'nao']);
                Imagem::create($foto);
            }
        }
    }

    public static function deletar($id){
        $imagems = Imagem::where('id_produto', $id);

        $files = array();
        File::delete($files);
    }

    public static function deletarAll($id){
        $imagems = Imagem::where('id_produto','=', $id)->get();

        $files = '';
        foreach ($imagems as $imagem){

            $files[] = $imagem['imagem'];
        }

        File::delete($files);
        Imagem::where('id_produto','=', $id)->delete();
    }

    public static function capa(){
        $imagems = Imagem::where(['capa'=> 'sim'])->get();
        $files = '';
        foreach ($imagems as $imagem){
            $files[] = $imagem['imagem'];
        }

        return $files;
    }

    public static function find(){
        $imagem = Imagem::where(['capa'=>'sim'])->get();
        return $imagem;
    }



}
