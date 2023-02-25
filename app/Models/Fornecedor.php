<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class Fornecedor extends Model
{
    // Esse recurso permite desativar registros no banco. Tornando o registro inativo.
    Use softDeletes;
    //Ajuste nome da tabela no banco
    protected $table = 'fornecedores';
    // propriedade model que qualifica o uso das propriedades
    protected $fillable = ['nome','site','uf','email'];

    //use HasFactory;
}
