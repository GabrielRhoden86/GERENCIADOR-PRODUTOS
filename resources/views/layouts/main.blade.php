<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="/css/styles.css">
    <title>@yield('title')</title>
</head>

<body class="antialiased">
    <header>
        <nav class="navbar navbar-expand-lg navbar-light p-3">
            <div class="collapse navbar-collapse" id="navbar">
                <a href="/">
                    <h5 class="text-decoration-none mb-0 font-weight-bold logo-header">Home</h5>
                </a>
                @auth
                    <span class="user text-muted">Bem-vindo, {{ Auth::user()->name }}!</span>
                @endauth
                <ul class="navbar-nav mb-0 ml-1">
                    @auth
                        <li class="nav-item">
                            <a href="/produtos" class="nav-link">Produtos</a>
                        </li>
                        <li class="nav-item">
                            <a href="/categorias" class="nav-link">Categorias</a>
                        </li>
                    @endauth

                    @auth
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
                        <li class="nav-item">
                            <a href="/login" class="nav-link">Login</a>
                        </li>
                        <li class="nav-item">
                            <a href="/register" class="nav-link">Cadastrar</a>
                        </li>
                    @endguest
                </ul>
            </div>
        </nav>
    </header>
    <main>
        @yield('content')
    </main>
    <footer>
        <small>Gerenciar Produtos &copy; 2023</small>
    </footer>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
</body>

</html>
