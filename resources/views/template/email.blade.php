@extends('layouts.main')
@section('title', 'Enviar Email')

@section('content')
    <div class="container content-include-category text-center text-dark pt-0">
        @if (session('msg'))
            <div class="alert alert-success fixed-top p-0 text-center w-100">
                <p class="mt-2">Email enviado com sucesso!</p>
            </div>
            {{ session('msg') == false }}
        @endif
        <h2 class="pt-5 text-dark mt-2">Envie Resultados</h2>
        <div class="container  p-2">
            <form method="POST" action="/controller-email">
                @csrf
                <div class="form-group">
                    <input type="text" class="form-control" id="nome" name="nome" placeholder="Digite seu nome">
                </div>
                <div class="form-group">
                    <input type="email" class="form-control" id="email" name="email" placeholder="Digite seu email">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="assunto" name="assunto" placeholder="Digite o assunto">
                </div>
                <div class="form-group">
                    <label for="mensagem">Mensagem:</label>
                    <textarea class="form-control" id="mensagem" name="mensagem" rows="4">

                    </textarea>
                </div>
                <button type="submit" class="btn btn-primary mt-2">Cadastrar</button>
            </form>
        </div>
    @endsection
