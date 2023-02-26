<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fornecedor;

class FornecedorController extends Controller
{
    public function index(){
        return view('app.fornecedor.index');
    }

    public function listar(Request $request){

        //$fornecedores = Fornecedor::all();

        $fornecedores = Fornecedor::where('nome', 'like', '%'.$request->nome.'%')
        ->where('site', 'like', '%'.$request->input('site').'%')
        ->where('uf', 'like', '%'.$request->input('uf').'%')
        ->where('email', 'like', '%'.$request->input('email').'%')
        ->get();

        return view('app.fornecedor.listar', ['lista_fornecedor' => $fornecedores]);
    }

    public function adicionar(Request $request){

        $msg = '';

        if(isset($request->_token) && $request->input('_token') != '' && $request->input('id') == ''){

            $regras = [
                'nome' => 'required|min:3|max:40',
                'site' => 'required',
                'uf' => 'required|min:2|max:2',
                'email' => 'email'
            ];

            $feedback = [
                'required' => 'O campo :attribute de ser preenchido.',
                'min' => 'O campo :attribute deve ter no mímino :min caracteres.',
                'max' => 'O campo :attribute deve ter no máximo :max caracteres.',
                'email' => 'Informe um email válido'
            ];

            $request->validate($regras, $feedback);

            $fornecedor = new Fornecedor();
            $fornecedor->create($request->all());

            $msg = 'Cadastro realizado com sucesso!';
        }

        if(isset($request->_token) && $request->input('_token') != '' && $request->input('id') != ''){
            $fornecedor = Fornecedor::find($request->input('id'));
            $update = $fornecedor->update($request->all());

            if($update){
                $msg = 'Update realizado com sucesso.';
            }
            else{
                $msg = 'Update apresentou problemas.';
            }
        }

        return view('app.fornecedor.adicionar', ['msg' => $msg]);
    }

    public function editar($id){

        $fornecedor = Fornecedor::find($id);

        return view('app.fornecedor.adicionar', ['fornecedor' => $fornecedor]);
    }
}
