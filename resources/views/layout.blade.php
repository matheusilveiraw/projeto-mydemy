<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('titulo')</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script src="https://unpkg.com/feather-icons"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>

<body>

    <div class="wrapper">
        <header>
            @include('navbar')
        </header>

        <div class="content">
            @yield('conteudo')
        </div>


        <footer class="footer">
            <div class="container">
                <a class="icone-git" href="https://github.com/matheusilveiraw">
                    <i data-feather="github"></i>
                </a>
                @matheusilveiraw | matheus.silveiraw@gmail.com
            </div>
        </footer>
    </div>


    <script src="{{asset('js/script.js')}}""></script>

    <script>
        // Inicialize Feather Icons
        feather.replace()
    </script>
</body>
</html>