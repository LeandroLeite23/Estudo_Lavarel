<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index(){

        $fornecedores = [
            0 => ['nome' => 'Fornecedor', 'status' => 'N', 'cnpj' => '00.000.000/0000-00', 'telefone' => '(31) 0.0000-0000'],
            1 => ['nome' => 'Fornecedor', 'status' => 'S', 'cnpj' => '00.000.000/0000-00'],
            2 => ['nome' => 'Fornecedor', 'status' => 'S', 'cnpj' => null, 'telefone' => '(11) 0.0000-0000']
        ];

        return view('app.fornecedor.index', compact('fornecedores'));
    }
}
