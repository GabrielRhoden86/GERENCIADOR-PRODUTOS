@extends('layouts.main')
@section('title', 'Produtos')
@section('content')

    <div class="jumbotron jumbotron-fluid text-center text-dark pt-0">
        @if (session('msg'))
            <div class="alert alert-success">
                <p>Produto cadastrado com sucesso!</p>
            </div>
            {{ session('msg') == false }}
        @endif
        @if (count($categorias) < 1)
            <div class="alert alert-info">
                <p>Antes de cadastrar um produto é necessário cadastrar uma categoria!</p>
            </div>
        @endif
        <h2 class="pt-5 text-dark mt-4">Cadastrar Produto</h2>
        <div class="container mt-5 p-2 d-flex justify-content-center">
            <form action="/produtos/cadastro-produto" method="POST" enctype="multipart/form-data" class="col-md-7">
                @csrf
                <div class="form-group">
                    <input required type="text" name="nome" class="form-control  "
                        id="nome"placeholder="Digite o nome do produto">
                </div>
                <div class="form-group">
                    <input required type="number" step="0.01" name="valor" class="form-control"
                        id="valor"placeholder="Digite o valor do produto">
                </div>
                <div class="form-group">
                    <select required class="form-control" id="categoria" name="categoria_id">
                        <option>Selecione uma categoria</option>
                        @foreach ($categorias as $categoria)
                            <option value={{ $categoria->id }}>{{ $categoria->nome }}</option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Cadastrar</button>
            </form>
        </div>

    @endsection
