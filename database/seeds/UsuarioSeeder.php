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
            'password'=>bcrypt("guilherme"),

        ];

        $dados2 = [
            'name'=>'Cinthia Ono',
            'email'=>'cinthia.ono@kilax.com.br',
            'password'=>bcrypt("cinthia")

        ];

        $dados3 = [
            'name'=>'Roberto Sonoda',
            'email'=>'roberto.sonoda@kilax.com.br',
            'password'=>bcrypt("roberto")

        ];

        $dados4 = [
            'name'=>'Regina Sonoda',
            'email'=>'regina.sonoda@kilax.com.br',
            'password'=>bcrypt("regina")

        ];
        if(User::where('email', '=', $dados['email'])->count()){
            $usuario = User::where('email', '=', $dados['email'])->first();
            $usuario->update($dados);
            echo "Ususario 1 Alterado!";
        }else{
            User::create($dados);
            echo "Usuario 1 criado!";
        }

        if(User::where('email', '=', $dados2['email'])->count()){
            $usuario = User::where('email', '=', $dados2['email'])->first();
            $usuario->update($dados2);
            echo "Ususario 2 Alterado!";
        }else{
            User::create($dados2);
            echo "Usuario 2 criado!";
        }

        if(User::where('email', '=', $dados3['email'])->count()){
            $usuario = User::where('email', '=', $dados3['email'])->first();
            $usuario->update($dados3);
            echo "Ususario 3 Alterado!";
        }else{
            User::create($dados3);
            echo "Usuario 3 criado!";
        }

        if(User::where('email', '=', $dados4['email'])->count()){
            $usuario = User::where('email', '=', $dados4['email'])->first();
            $usuario->update($dados4);
            echo "Ususario 4 Alterado!";
        }else{
            User::create($dados4);
            echo "Usuario 4 criado!";
        }
    }
}
