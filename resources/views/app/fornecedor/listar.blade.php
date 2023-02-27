<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

@extends('app.layouts.basico')

@section('titulo', 'Fornecedor')

@section('conteudo')
<div class="conteudo-pagina">
    <div class="titulo-pagina-2">
        <p class="text-center-lg-start fs-3">Fornecedor - Listar</p>
    </div>
    <br>
    <div class="menu">
        <ul class="list-group list-group-horizontal">
            <li><a href="{{ route('app.fornecedor.adicionar') }}" class="btn btn-success m-1 text-white">Novo</a></li>
            <li><a href="{{ route('app.fornecedor') }}" class="btn btn-primary m-1 text-white">Consulta</a></li>
        </ul>
    </div>
    <br>
    <br>
    <div class="informacao-pagina">
        <div style="width:90%; margin-left: auto; margin-right:auto ">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">COD</th>
                        <th scope="col">NOME</th>
                        <th scope="col">SITE</th>
                        <th scope="col">UF</th>
                        <th scope="col">EMAIL</th>
                        <th colspan="2" scope="col">AÇÃO</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($fornecedores as $fornecedor )
                    <tr>
                        <th>{{ $fornecedor->id }}</th>
                        <td>{{ $fornecedor->nome }}</td>
                        <td>{{ $fornecedor->site }}</td>
                        <td>{{ $fornecedor->uf }}</td>
                        <td>{{ $fornecedor->email }}</td>
                        <td><a href="{{ route('app.fornecedor.excluir', $fornecedor->id) }}" class="btn btn-danger">Excluir</a></td>
                        <td><a href="{{ route('app.fornecedor.editar', $fornecedor->id) }}" class="btn btn-primary">Editar</a></td>
                    </tr>
                    @endforeach
                </tbody>
        </table>
        <br>
        <div class="pagination justify-content-center">
            {{ $fornecedores->appends($request)->links() }}
        </div>
        </div>
    </div>
</div>
@endsection

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
