<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <!-- Fonte do Google -->
        <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">

        <!-- CSS Bootstrap -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

        <!-- CSS da aplicação -->
        <link href="/css/style.css" rel="stylesheet">
        <script src="/js/scripts.js"></script>
    </head>
    <body>
        <header>
            <navbar class="navbar navbar-expand-lg">
                <div class="container-fluid">

                    <div class="collapse navbar-collapse" id="navbar">
                        <a href="/" class="navbar-brand">MatEduca</a>
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a href="/" class="nav-link">Professores
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/" class="nav-link">Como Funciona</a>
                            </li>
                            <li class="nav-item">
                                <a href="/" class="nav-link">Entrar</a>
                            </li>
                            <li class="nav-item">
                                <a href="/" class="nav-link">Cadastrar-se</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </navbar>
        </header>
      @yield('content')
      <footer>
      </footer>
      <script src="https://unpkg.com/ionicons@5.1.2/dist/ionicons.js"></script>
    </body>
</html>
