@extends('layouts.main')
@section('title', 'Categorias')
@section('content')

    @if (session('msgDestroy'))
        <div class="alert alert-danger text-center">
            <p>Categoria excluida com sucesso!</p>
        </div>
        {{ session('msgDestroy') == false }}
    @endif
    @if (session('msgUpdate'))
        <div class="alert alert-info text-center">
            <p>Categoria editada com sucesso!</p>
        </div>
        {{ session('msgUpdate') == false }}
    @endif
    <div class="container text-center text-dark mt-5 bg-white p-4">
        <div class="d-flex justify-content-end w-100 mt-5">
            <a class="" title="cadastrar categoria" href="/categorias/cadastro-categoria">
                <img src="/img/add.png" alt="img">
            </a>
        </div>
        <div class="d-flex justify-content-center">
            <h2 class="text-dark">Categorias</h2>
        </div>
        <table class="table mt-5">
            <thead>
                <tr>
                    <th></th>
                    <th class="col-md-8">Nome</th>
                    <th class="col-md-1">Editar</th>
                    <th class="col-md-1">Excluir</th>
                </tr>
            </thead>
            @foreach ($categorias as $categoria)
                <tbody>
                    <tr>
                        <td scropt="row">{{ $loop->index + 1 }}</td>
                        <td>{{ $categoria->nome }}</td>
                        <td>
                            <a href="/categorias/editar-categoria/{{ $categoria->id }}"
                                class="btn btn-primary btn-sm">Editar</a>
                        </td>
                        <td>
                            <form action="/categorias/{{ $categoria->id }}" method="POST">
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
