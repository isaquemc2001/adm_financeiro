<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuario;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function login(Request $request){

        session_start();
        if(isset($_SESSION['cpf']) && isset($_SESSION['senha']) && $_SESSION['idusuariotipo'] == 4){
            return redirect()->route('chamado.tecnico');
        } else if(isset($_SESSION['cpf']) && isset($_SESSION['senha']) && $_SESSION['idusuariotipo'] != 4){
            return redirect()->route('chamado.solicitante');
        }

        $erro = '';

        if($request->get('erro') == 1){
            $erro = "Usuário ou senha inválido";
        }

        return view('login.index', ['titulo' => 'Login', 'css' => 'login.css', 'erro' => $erro]);
    }

    public function autenticar(Request $request){

        $regras = [
            'cpf' => 'min:11|max:11',
            'senha' => 'required'
        ];

        $feedback = [
            'cpf.min' => 'O campo CPF não possui valores suficientes',
            'cpf.max' => 'O campo CPF possui mais valores que o suficiente',
            'senha.required' => 'O campo senha é obrigatório'
        ];

        $request->validate($regras, $feedback);
        $tabela = DB::table('usuario');

        $cpf = $request->get('cpf');
        $senha = $request->get('senha');

        $senhamd5 = md5($senha.'RFzv-RJj]%Ub-6K~Wxna@Jc}Y<3ru2o%');

        $usuario = $tabela->where('cpf', $cpf)->where('senha', $senhamd5)->get()->first();

        if(isset($usuario->nome)){
            //dd($usuario);
            session_start();
            $_SESSION['idusuario'] = $usuario->idusuario;
            

            if($_SESSION['idusuariotipo'] == 4){
                return redirect()->route('chamado.tecnico');
            }else{
                return redirect()->route('chamado.solicitante');
            }
        }else{
            return redirect()->route('chamado.login', ['erro' => 1]);
        }

    }

    public function logout(){
        session_destroy();
        return redirect()->route('chamado.login');
    }
}
