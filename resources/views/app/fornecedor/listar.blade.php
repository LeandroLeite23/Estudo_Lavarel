@extends('app.layouts.basico')

@section('titulo', 'Fornecedor')

@section('conteudo')
<div class="conteudo-pagina">
    <div class="titulo-pagina-2">
        <p>Fornecedor - Listar</p>
    </div>
    <div class="menu">
        <ul>
            <li><a href="{{ route('app.fornecedor.adicionar') }}">Novo</a></li>
            <li><a href="{{ route('app.fornecedor') }}">Consulta</a></li>
        </ul>
    </div>
    <br>
    <div class="informacao-pagina">
        <div style="width:90%; margin-left: auto; margin-right:auto ">
            <table border="1" width="100%">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Site</th>
                        <th>UF</th>
                        <th>Email</th>
                        <th>Excluir</th>
                        <th>Editar</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($lista_fornecedor as $fornecedor )
                    <tr>
                        <td>{{ $fornecedor->nome }}</td>
                        <td>{{ $fornecedor->site }}</td>
                        <td>{{ $fornecedor->uf }}</td>
                        <td>{{ $fornecedor->email }}</td>
                        <td></td>
                        <td></td>
                    </tr>
                    @endforeach
                </tbody>
        </table>
        </div>
    </div>
</div>
@endsection
