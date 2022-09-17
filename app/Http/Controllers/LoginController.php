<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function autenticar(Request $request){

        //validaçao campos
        $validate = [
            'usuario' => 'string',
            'senha' => 'required'
        ];

        $feedback = [
            'usuario.string' => 'O campo usuario é obrigatorio',
            'senha.required' => 'O campo senha é obrigatorio'
        ];

        //$request->validate($validate, $feedback);

        $usuario = $request->get('usuario');
        $senha = $request->get('senha');

        $user = Usuario::where('usuario', $usuario)
                          ->where('senha', $senha)
                          ->get()
                          ->first();

        if(!empty($user)){
            
            if(asset($user->usuario)){
                session_start();
                $_SESSION['id'] = $user->id_usuario;
                $_SESSION['nome'] = $user->nome;
                $_SESSION['email'] = $user->email;

                return redirect()->route('dashboard');
            }else{
                // return redirect()->route('login', ['erro' => '1']);
                return response()->json(['message' => 'Usuario não encontrado']);
            }
        }else{
            return response()->json(['message' => 'Usuario nao encontrado']);
        }

    }
}
