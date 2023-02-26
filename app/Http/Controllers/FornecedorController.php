<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fornecedor;

class FornecedorController extends Controller
{
    public function index(){
        return view('app.fornecedor.index');
    }

    public function listar(){
        return view('app.fornecedor.listar');
    }

    public function adicionar(Request $request){

        //$fornecedor = new Fornecedor();

        if(isset($request->_token) && $request->input('_token') != ''){

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
        }

        return view('app.fornecedor.adicionar');
    }
}
