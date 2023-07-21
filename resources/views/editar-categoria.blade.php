@extends('layouts.main')
@section('title', 'Editar: ' . $categoria->nome)
@section('content')
    <div class="jumbotron jumbotron-fluid text-center text-dark pt-0">
        <h2 class="pt-5 text-dark mt-4">Editar Produto: {{ $categoria->nome }}</h2>
        <div class="container mt-5 p-2 d-flex justify-content-center">
            <form action="/editar-categoria/{{ $categoria->id }}" method="POST" enctype="multipart/form-data" class="col-md-7">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <input type="text" class="form-control" name="nome" id="nome"
                        placeholder="{{ $categoria->nome }}">
                </div>
                <button type="submit" class="btn btn-primary mt-2">Cadastrar</button>
            </form>
        </div>
    @endsection
