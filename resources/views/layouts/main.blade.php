<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="/css/styles.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>@yield('title')</title>
</head>

<body class="antialiased">
    <header>
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="collapse navbar-collapse" id="navbar">
                <a href="/">
                    <h5 class="text-decoration-none mb-0 font-weight-bold logo-header">Home</h5>
                </a>
                <ul class="navbar-nav">
                    @auth
                        <li class="nav-item">
                            <a href="/produtos" class="nav-link">Produtos</a>
                        </li>
                        <li class="nav-item">
                            <a href="/events/create" class="nav-link">Cadastrar Produto</a>
                        </li>
                        <li class="nav-item">
                            <a href="/" class="nav-link">Categorias</a>
                        </li>
                        <li class="nav-item">
                            <a href="/events/create" class="nav-link">Cadastrar Categoria</a>
                        </li>
                    @endauth

                    @auth
                        {{-- <li class="nav-item">
                            <a href="/dashboard" class="nav-link">Meus Eventos</a>
                        </li> --}}
                        <li class="nav-item">
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
        {{-- <div class="container-fluid">
            <div class="row">
                @if (session('msg'))
                    <script>
                        Swal.fire({
                            title: "Evento Criado Com Sucesso !",
                            text: "Verifique os detalhes abaixo",
                            icon: 'success',
                            confirmButtonText: 'Ok'
                        });
                    </script>
                    {{ session('msg') == false }}
                @endif

            </div>
        </div> --}}
        @yield('content')
    </main>
    <footer>
        <small>Geenciar Produtos &copy; 2023</small>
    </footer>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
</body>

</html>
