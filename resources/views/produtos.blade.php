@extends('layouts.main')
@section('content')
    <div class="jumbotron jumbotron-fluid text-center text-dark pt-3">
        <h2 class="mt-2">Produtos</h2>
        <div class="container mt-5 p-2">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Nome</th>
                        <th scope="col">Valor</th>
                        <th scope="col">Categoria</th>
                        <th class="w-10">Editar</th>
                        <th class="w-10">Excluir</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Produto 1</td>
                        <td>R$10,00</td>
                        <td>Categoria 1</td>
                        <td><button class="btn btn-primary btn-sm">Editar</button></td>
                        <td><button class="btn btn-danger btn-sm">Excluir</button></td>
                    </tr>
                    <tr>
                        <td>Produto 2</td>
                        <td>R$20,00</td>
                        <td>Categoria 2</td>
                        <td><button class="btn btn-primary btn-sm">Editar</button></td>
                        <td><button class="btn btn-danger btn-sm">Excluir</button></td>
                    </tr>
                </tbody>
            </table>
        </div>
    @endsection
