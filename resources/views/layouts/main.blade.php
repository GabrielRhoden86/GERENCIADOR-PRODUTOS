<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('/css/bootstrap.css') }}">
    <link rel="stylesheet" href="/css/styles.css">
    <link rel="stylesheet" href="/fonts/google-fonts-roboto.css">
    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('/js/bootstrap.js') }}"></script>
    <title>@yield('title', 'Home')</title>
</head>

<body class="antialiased">
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light p-3">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Alterna navegação">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav w-100">
                    <a href="/">
                        <h5 class="text-decoration-none mb-0 font-weight-bold logo-header ">Home</h5>
                        <span class="sr-only">(Página atual)</span>
                    </a>
                    @auth
                        <span class="user ml-3 text-muted">Bem-vindo, {{ Auth::user()->name }}!</span>
                    @endauth
                    <ul class="navbar-nav mb-0 d-flex justify-content-end">
                        @auth

                            <li class="nav-item">
                                <a href="/produtos" class="nav-link">Produtos</a>
                            </li>
                            <li class="nav-item">
                                <a href="/categorias" class="nav-link">Categorias</a>
                            </li>
                            <li class="nav-item">
                                <a href="/apiHome" class="nav-link">APIs</a>
                            </li>
                            <li class="nav-item mr-4">
                                <form action="/logout" method="POST">
                                    @csrf
                                    <a href="/logout" method="POST" class="nav-link"
                                        onclick="event.preventDefault();
                                    this.closest('form').submit();">Sair</a>
                                </form>
                            </li>
                        @endauth
                        @guest
                            <li class="nav-item ml-3">
                                <a href="/login" class="nav-link">Login</a>
                            </li>
                            <li class="nav-item">
                                <a href="/register" class="nav-link">Cadastrar</a>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <main>
        @yield('content')
    </main>
    <footer>
        <small>Gerenciar Produtos &copy; 2023</small>
    </footer>
</body>

</html>
