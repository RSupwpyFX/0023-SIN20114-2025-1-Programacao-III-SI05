<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

    <!-- Fonte Google -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">

    <!-- CSS DO Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- SCRIPTS DO APP -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="js/glfx.js"></script>

    @yield('style')
</head>

<body class="container">
    <!-- ==================== START OF NAVBAR ==================== -->
    <nav class="navbar navbar-expand-lg bg-light rounded mt-4">
        <div class="container-fluid">
            <img style="width: 60px; height: 50px;" src="/img/logo.png" class="me-3">
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active fonte01 fonte-tamanho" href="/">Início</a>
                        
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active fonte01 fonte-tamanho" href="/api-weather">Previsão do Tempo</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active fonte01 fonte-tamanho" href="/photoshop">Edição de Imagem</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fonte01 fonte-tamanho" href="https://github.com/ArthurEstevan/Entra21_JavaScript_2022" target="_blank">GitHub</a>
                    </li>
                </ul>
                <span class="navbar-text">
                    <a target="_blank" class="me-3" href="https://github.com/ArthurEstevan"><img src="/img/github.png" alt="GitHub"></a>
                    <a target="_blank" class="me-3" href="https://www.linkedin.com/in/arthur-estevan-vargas-189208223/"><img src="/img/linkedin.png" alt="Linkedin"></a>
                    <a target="_blank" class="me-3" href="https://mail.google.com/mail/u/0/?fs=1&to=arthur.estevan01@gmail.com&su=Contato+-+via+perfil+github&body=Ol%C3%A1+Arthur+Tudo+bem?&tf=cm"><img src="/img/gmail.png" alt="Gmail"></a>
                    <a target="_blank" class="me-3" href="https://www.instagram.com/arthur.estevan/"><img src="/img/instagram.png" alt="Instagram"></a>
                </span>
            </div>
        </div>
    </nav>
    <!-- ==================== END OF NAVBAR ==================== -->

    @yield('content')

    <!-- SCRIPTS DO APP -->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>

</html>