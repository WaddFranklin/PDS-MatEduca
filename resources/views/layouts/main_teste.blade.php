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
        <link href="/css/teste_css/header_test.css" rel="stylesheet">
        <link href="/css/footer_style.css" rel="stylesheet">
        <link href="/css//teste_css/index_test.css" rel="stylesheet">

        <!-- Js -->
        <script src = 'js/script.js'></script>
    </head>
    <body>
        <header>
            <div class="container-header">
                <navbar class="navbar" id="navbar">
                    <a href="/teste" id="logo">MatEduca</a>
                    <ul class="navs-links">
                        <li class="navs-items">
                            <a href="/teste" class="nav-link">Professores</a>
                        </li>
                        <li class="navs-items">
                            <a href="/help" class="nav-link">Como Funciona</a>
                        </li>
                        <div class="vertical-divider"></div>
                        <li class="navs-items">
                            <a href="/login" class="nav-link">Entrar</a>
                        </li>
                        <li class="navs-items"><a href="/cadastro" id = "cadastro" class="nav-link">Cadastrar-se</a></li>
                    </ul>
                </navbar>
            </div>
        </header>

      @yield('content')
      <footer>

      <div class="rodape-up">
        <h3>MatEduca</h3>

        <div class = "rodape-up-right">

        <a href="/">Professores</a>
        <a href="/">Política de privacidade</a>
        </div>

      </div>

        <hr />
        <div class="rodape-down">
            <p>Todos os direitos reservados &copy;</p>
            <p>2023</p>
        </div>
    </footer>
            <script src="https://unpkg.com/ionicons@5.1.2/dist/ionicons.js"></script>
            <script src= 'js/script.js'></script>
    </body>
</html>
