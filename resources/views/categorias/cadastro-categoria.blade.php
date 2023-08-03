@extends('layouts.main')
@section('title', 'Cadastrar categorias')

@section('content')
    <div class="container content-include-category text-center text-dark pt-0">
        @if (session('msg'))
            <div class="alert alert-success fixed-top p-0 text-center w-100">
                <p class="mt-2">Categoria adicionada com sucesso!</p>
            </div>
            {{ session('msg') == false }}
        @endif
        <h2 class="pt-5 text-dark mt-5">Cadastrar Categoria</h2>
        <div class="container mt-5 p-2 d-flex justify-content-center">
            <form action="/categorias/cadastro-categoria" method="POST" enctype="multipart/form-data" class="col-md-7">
                @csrf
                <div class="form-group">
                    <input type="text" class="form-control" name="nome" id="nome"
                        placeholder="Digite o nome da nova categoria">
                </div>
                <button type="submit" class="btn btn-primary mt-2">Cadastrar</button>
            </form>
        </div>
    @endsection
