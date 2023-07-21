@extends('layouts.main')
@section('title', 'Categorias')
@section('content')
    <div class="jumbotron jumbotron-fluid text-center text-dark pt-0">
        @if (session('msgDestroy'))
            <div class="alert alert-danger">
                <p>Produto excluido com sucesso!</p>
            </div>
            {{ session('msgDestroy') == false }}
        @endif
        <div class="jumbotron jumbotron-fluid text-center text-dark pt-0">
            @if (session('msgUpdate'))
                <div class="alert alert-info">
                    <p>Categoria editada com sucesso!</p>
                </div>
                {{ session('msgUpdate') == false }}
            @endif
            <div class="d-flex justify-content-end">
                <div class="icon-add-categoria">
                    <a title="cadastrar categoria" href="/cadastro-categoria">
                        <ion-icon name="add-circle-outline" size="large" color="success"></ion-icon>
                    </a>
                </div>
            </div>
            <div class="container mt-0 ">
                <div class="row ml-2 title-categoria">
                    <h2 class="w-75 ml-5">Categorias</h2>
                </div>
                <table class="table mt-5">
                    <thead>
                        <tr>
                            <th scope="col"></th>
                            <th scope="col">Nome</th>
                            <th class="edit-col">Editar</th>
                            <th class="delete-col">Excluir</th>
                        </tr>
                    </thead>
                    @foreach ($categorias as $categoria)
                        <tbody>
                            <tr>
                                <td scropt="row">{{ $loop->index + 1 }}</td>
                                <td>{{ $categoria->nome }}</td>
                                <td><a href="/editar-categoria/{{ $categoria->id }}"
                                        class="btn btn-primary btn-sm">Editar</a>
                                </td>
                                <td>
                                    <form action="/categoria/{{ $categoria->id }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger btn-sm" href="#">Excluir</button>
                                    </form>
                                </td>
                            </tr>
                        </tbody>
                    @endforeach
                </table>
            </div>
        @endsection
