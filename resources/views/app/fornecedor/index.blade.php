<h3>Lista de Fornecedores</h3>

@php

@endphp

@isset($fornecedores)

@foreach ($fornecedores as $fornecedor)

    Código: {{$loop->iteration}}
    <br><br>
    Fornecedor: {{$fornecedor['nome']}} {{$loop->iteration}}
    <br>
    Status: {{$fornecedor['status']}}
    <br>
    CNPJ: {{$fornecedor['cnpj'] ?? 'cnpj não cadastrado'}}
    <br>
    Telefone: {{$fornecedor['telefone'] ?? 'telefone não cadastrado'}}
    <br>

    @if($loop->first)
        Primeira iteração do loop
    @endif

    @if($loop->last)
        Última iteração do loop
        <br><br>
        <b>Total de registros:</b> {{$loop->count}}
    @endif

    <hr>

@endforeach

@endisset







