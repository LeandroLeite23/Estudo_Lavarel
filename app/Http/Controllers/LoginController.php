<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class LoginController extends Controller
{
    public function index(Request $request){

        $erro = '';

        $request->get('erro') == 1 ? $erro = 'Usuário e ou senha inválidos.' : '';

        $request->get('erro') == 2 ? $erro = 'Necessário realizar login para ter acesso.' : '';

        return view('site.login', ['titulo' => 'Login', 'erro' => $erro]);
    }

    public function autenticar(Request $request){

        $regras = [
            'usuario' => 'email',
            'senha' => 'required'
        ];

        $feedback = [
            'usuario.email' => 'O campo usuário (email) é obrigatório.',
            'senha.required' => 'O campo senha é obrigatório.'
        ];

        $request->validate($regras, $feedback);

        $email = $request->get('usuario');
        $password = $request->get('senha');

        $user = new User();
        $usuario = $user->where('email', $email)->where('password', $password)->get()->first();


        if(isset($usuario->name)){

            session_start();
            $_SESSION['nome'] = $usuario->name;
            $_SESSION['email'] = $usuario->email;

            return redirect()->route('app.clientes');
        }
        else{
            return redirect()->route('site.login', ['erro' => 1]);
        }
    }

    public function sair(){
        echo 'Sair';
    }
}
