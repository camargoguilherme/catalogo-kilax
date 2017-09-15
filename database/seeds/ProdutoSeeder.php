<?php

use Illuminate\Database\Seeder;
use App\Produto;

class ProdutoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dados = [
            'descricao'=>'Saboneteira Sweets',
            'codbarra'=>'4587896998554',
            'material'=>'Polipropileno',
            'medidas'=>'15x25x5',
            'peso'=>'15g',
            'valor'=>'10.99',
            'publicado'=>'sim'

        ];
        if(Produto::where('codbarra', '=', $dados['codbarra'])->count()){
            $usuario = Produto::where('codbarra', '=', $dados['codbarra'])->first();
            $usuario->update($dados);
            echo "Produto 1 Alterado!\n";
        }else{
            Produto::create($dados);
            echo "Produto 1 criado!\n";
        }

        $dados1 = [
            'descricao'=>'Copo Indigo',
            'codbarra'=>'4521225548796',
            'material'=>'Vidro',
            'medidas'=>'20',
            'peso'=>'80g',
            'valor'=>'8.99',
            'publicado'=>'sim'

        ];
        if(Produto::where('codbarra', '=', $dados1['codbarra'])->count()){
            $produto1 = Produto::where('codbarra', '=', $dados1['codbarra'])->first();
            $produto1->update($dados1);
            echo "Produto 2 Alterado!\n";
        }else{
            Produto::create($dados1);
            echo "Produto 2 criado!\n";
        }
    }
}
