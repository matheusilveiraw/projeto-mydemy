<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('titulo')</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    </head>

<body>
    <header>


        <nav class="navbar">
            <div>
                <i class="fas fa-bars"></i>
            </div>
            <div class="navbar-left">
                <div class="navbar-brand">
                    <a href="#"><img src="{{ asset('img/logo-udemy.svg')}}" alt="Udemy Logo"></a>
                </div>
                <ul class="navbar-links">
                    <li><a href="#">Categorias</a></li>
                </ul>
            </div>
            <div class="navbar-search">
                <i class="fas fa-search"></i>
                <input type="text" placeholder="Pesquisar por qualquer coisa">
            </div>
            <div class="navbar-right">
                <ul class="navbar-links">
                    <li><a id="udemy-business" href="#">Udemy Business</a></li>
                    <li><a id="ensine-udemy" href="#">Ensine na Udemy</a></li>
                </ul>
                <ul class="navbar-icons">
                    <li><a href="#"><i class="fas fa-search"></i></a></li>
                    <li><a href="#"><i class="fas fa-shopping-cart"></i></a></li>
                </ul>
                <div class="navbar-buttons">
                    <a href="#" class="btn login-btn">Fazer login</a>
                    <a href="#" class="btn signup-btn">Cadastre-se</a>
                    <a href="#" class="btn login-btn"><i class="fas fa-globe"></i></a>
                </div>
            </div>
        </nav>
    </header>

    @yield('conteudo')

    <script src="{{asset('js/script.js')}}""></script>
</body>
</html>