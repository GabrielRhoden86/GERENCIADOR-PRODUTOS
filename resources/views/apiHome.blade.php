@extends('layouts.main')
@section('title', 'APIs')
@section('content')

    <div class="container p-5 mt-5 mr-3">
        <div class="row p-5 flex-d justify-content-center">
            <div class="col-sm">
                <a href="http://localhost:8000/api/produtos">Produtos</a>
            </div>
            <div class="col-sm">
                <a href="http://localhost:8000/api/usuario/1">Usuário Produtos</a>
            </div>
            <div class="col-sm">
                <a href="http://localhost:8000/api/documentation">Documentação Swagger</a>
            </div>
        </div>
    </div>

@endsection
