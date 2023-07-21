    @extends('layouts.main')
    @section('title', 'Editar: ' . $produto->nome)
    @section('content')

        <div class="jumbotron jumbotron-fluid text-center text-dark pt-0">
            <h2 class="pt-5 text-dark mt-4">Editar Produto: {{ $produto->nome }}</h2>
            <div class="container mt-5 p-2 d-flex justify-content-center">
                <form action="/produtos/editar-produto/{{ $produto->id }}" method="POST" enctype="multipart/form-data"
                    class="col-md-7">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <input type="text" class="form-control" name="nome" id="nome" value="{{ $produto->nome }}">
                    </div>
                    <div class="form-group">
                        <input type="number" step="0.01" name="valor" class="form-control" id="valor"
                            value="{{ $produto->valor }}">
                    </div>
                    <div class="form-group">
                        <select name="categoria_id" class="form-control" id="categoria">
                            <option value="{{ $produto->categoria->id }}" selected>{{ $produto->categoria->nome }}
                            </option>
                            @foreach ($categorias as $categoria)
                                <option value={{ $categoria->id }}>{{ $categoria->nome }}</option>
                            @endforeach
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary mt-2">Editar</button>
                </form>

            </div>
        @endsection
