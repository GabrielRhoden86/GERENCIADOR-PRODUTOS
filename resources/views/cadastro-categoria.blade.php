@extends('layouts.main')
@section('title', 'Cadastrar categorias')
@section('content')
    <div class="jumbotron jumbotron-fluid text-center text-dark pt-0">
        @if (session('msg'))
            <div class="alert alert-success">
                <p>Categoria adicionada com sucesso!</p>
            </div>
            {{ session('msg') == false }}
        @endif
        <h2 class="pt-5 text-dark mt-4">Cadastrar Categoria</h2>
        <div class="container mt-5 p-2 d-flex justify-content-center">
            <form action="/cadastro-categoria" method="POST" enctype="multipart/form-data" class="col-md-7">
                @csrf
                <div class="form-group">
                    <input type="text" class="form-control" name="nome" id="nome"
                        placeholder="Digite o nome da nova categoria">
                </div>
                <button type="submit" class="btn btn-primary mt-2">Cadastrar</button>
            </form>
        </div>
    @endsection
