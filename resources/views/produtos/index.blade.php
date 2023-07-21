@extends('layouts.main')
@section('title', 'Produtos')
@section('content')

    <div class="jumbotron jumbotron-fluid text-center text-dark pt-0">
        @if (session('msgDestroy'))
            <div class="alert alert-danger">
                <p>Produto excluido com sucesso!</p>
            </div>
            {{ session('msgDestroy') == false }}
        @endif
        @if (session('msgEdit'))
            <div class="alert alert-info">
                <p>Produto editado com sucesso!</p>
            </div>
            {{ session('msgEdit') == false }}
        @endif
        <div class="d-flex justify-content-end">
            <div class="icon-add">
                <a title="cadastrar produto" href="/produtos/cadastro-produto">
                    <ion-icon name="add-circle-outline" size="large" color="success"></ion-icon>
                </a>
            </div>
        </div>

        <h2 class="">Produtos</h2>
        <div class="container mt-5 p-2">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col"></th>
                        <th scope="col">Nome</th>
                        <th scope="col">Valor</th>
                        <th scope="col">Categoria</th>
                        <th class="w-10">Editar</th>
                        <th class="w-10">Excluir</th>
                    </tr>
                </thead>
                @foreach ($produtos as $produto)
                    <tbody>
                        <tr>
                            <td scropt="row">{{ $loop->index + 1 }}</td>
                            <td>{{ $produto->nome }}</td>
                            <td>{{ $produto->valor }}</td>
                            <td>{{ $produto->categoria->nome }}</td>
                            <td><a href="/produtos/editar-produto/{{ $produto->id }}"
                                    class="btn btn-primary btn-sm">Editar</a></td>
                            <td>
                                <form action="/produtos/{{ $produto->id }}" method="POST">
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
        <div id="myApi" class="w-50"></div>
    @endsection
