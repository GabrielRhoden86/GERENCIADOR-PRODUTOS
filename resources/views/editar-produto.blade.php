@extends('layouts.main')
@section('title', 'Editar: ' . $produto->nome)
@section('content')

    <div class="jumbotron jumbotron-fluid text-center text-dark pt-0">
        <h2 class="pt-5 text-dark mt-4">Editar Produto: {{ $produto->nome }}</h2>
        <div class="container mt-5 p-2 d-flex justify-content-center">
            <form action="/editar-produto/{{ $produto->id }}" method="POST" enctype="multipart/form-data" class="col-md-7">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <input type="text" class="form-control" name="nome" id="nome"
                        placeholder="{{ $produto->nome }}">
                </div>
                <div class="form-group">
                    <input type="number" step="0.01" name="valor" class="form-control" id="valor"
                        placeholder="{{ $produto->valor }}">
                </div>
                <div class="form-group">
                    <select name="categoria_id" class="form-control" id="categoria">
                        <option>Selecione uma categoria</option>
                        <option value=1>Categoria 1</option>
                        <option value=2>Categoria 2</option>
                        <option value=3>Categoria 3</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary mt-2">Cadastrar</button>
            </form>

        </div>
    @endsection
