@extends('app.layouts.basico')

@section('titulo', 'Fornecedor')

@section('conteudo')
<div class="conteudo-pagina">
    <div class="titulo-pagina-2">
        <p>Fornecedor - Adicionar</p>
    </div>
    <div class="menu">
        <ul>
            <li><a href="{{ route('app.fornecedor.adicionar') }}">Novo</a></li>
            <li><a href="{{ route('app.fornecedor') }}">Consulta</a></li>

        </ul>
    </div>
    <div class="informacao-pagina">
        <div style="color: darkgreen">{{ $msg }}</div>
        <div style="width:30%; margin-left: auto; margin-right:auto ">
            <form method="post" action="{{ route('app.fornecedor.adicionar')}}">
                @csrf
                <input type="text" name="nome" value="{{ old('nome') }}" placeholder="Nome" class="borda-preta">
                <div style="color: red; text-align: left">{{ $errors->has('nome') ? $errors->first('nome') : '' }}</div>

                <input type="text" name="site" value="{{ old('site') }}" placeholder="Site" class="borda-preta">
                <div style="color: red; text-align: left">{{ $errors->has('site') ? $errors->first('site') : '' }}</div>

                <input type="text" name="uf" value="{{ old('uf') }}" placeholder="UF" class="borda-preta">
                <div style="color: red; text-align: left">{{ $errors->has('uf') ? $errors->first('uf') : '' }}</div>

                <input type="text" name="email" value="{{ old('email') }}" placeholder="E-mail" class="borda-preta">
                <div style="color: red; text-align: left">{{ $errors->has('email') ? $errors->first('email') : '' }}</div>

                <button type="submit" class="borda-preta">Cadastrar</button>
            </form>
        </div>
    </div>
</div>
@endsection
