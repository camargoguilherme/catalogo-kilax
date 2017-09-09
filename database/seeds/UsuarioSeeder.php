<?php

use Illuminate\Database\Seeder;
use App\User;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dados = [
            'name'=>'Guilherme',
            'email'=>'guilherme.camargo@kilax.com.br',
            'password'=>bcrypt("guilhermecamargo"),
            'name'=>'Cinthia Ono',
            'email'=>'cinthia.ono@kilax.com.br',
            'password'=>bcrypt("cinthiaono"),
            'name'=>'Roberto Sonoda',
            'email'=>'roberto.sonoda@kilax.com.br',
            'password'=>bcrypt("robertosonoda"),
            'name'=>'Regina Sonoda',
            'email'=>'regina.sonoda@kilax.com.br',
            'password'=>bcrypt("reginasonoda")
        ];
        if(User::where('email', '=', $dados['email'])->count()){
            $usuario = User::where('email', '=', $dados['email'])->first();
            $usuario->update($dados);
            echo "Ususario Alterado!";
        }else{
            User::create($dados);
            echo "Usuario criado!";
        }
    }
}
