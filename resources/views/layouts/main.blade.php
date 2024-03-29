<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <!-- Fonte do google -->
        <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">

        <!-- CSS Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

        <!-- CSS da aplicação -->
        <link rel="stylesheet" href="/css/styles.css">
        <script src="/js/scripts.js"></script>
    </head>
    <body class="antialiased">
     <header>
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="collapse navbar-collapse" id="navbar">
                <a href="/" class="navbar-brand">
                    <img src="/img/logo.jfif" alt="">
                </a>
                <ul class="navbar-nav">
                    <li class="nav-tem">
                        <a href="/" class="nav-link">Eventos</a>
                    </li>
                    <li class="nav-tem">
                        <a href="/events/create" class="nav-link">Criar Eventos</a>
                    </li>
                    @auth
                    <li class="nav-tem">
                        <a href="/dashboard" class="nav-link">Meu Eventos</a>
                    </li>

                    <li class="nav-tem">
                        @csrf 
                        <form action="/logout" method="POST">
                            @csrf
                            <a href="/logout" 
                               class="nav-link" 
                               onclick="event.preventDefault(); 
                               this.closest('form').submit();">
                                Sair
                            </a>
                        </form>
                    </li>
                    @endauth
                    @guest
                    <li class="nav-tem">
                        <a href="/login" class="nav-link">Entrar</a>
                    </li>
                     <li class="nav-tem">
                        <a href="/register" class="nav-link">Cadastar</a>
                    </li>
                    @endguest
                </ul>
            </div>
        </nav>
     </header>
    <main>
        <div class="container-fluid">
            <div class="row">
                @if(session('msg'))
                <p class="msg"> {{ session('msg') }}</p>
                @endif
                @yield('content')
            </div>
        </div>
    </main>
    <footer>
        <p>fnevents &copy; 2023</p>
    </footer>
    <script src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    </body>
</html>
