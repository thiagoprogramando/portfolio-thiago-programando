<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

        <title>Thiago César - Desenvolvedor de Software</title>

        <link rel="icon" type="image/x-icon" href="{{ asset('portfolio/favicon.ico') }}" />
        <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" rel="stylesheet" />
        <link href="{{ asset('portfolio/css/styles.css') }}" rel="stylesheet"/>
    </head>
    <body class="d-flex flex-column h-100">
        <main class="flex-shrink-0">

            <nav class="navbar navbar-expand-lg navbar-light bg-white py-3">
                <div class="container px-5">
                    <a class="navbar-brand" href="{{ route('portfolio') }}"><span class="fw-bolder text-dark">Thiago Programando</span></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0 small fw-bolder">
                            <li class="nav-item"><a class="nav-link" href="{{ route('portfolio') }}">Ínicio</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('skill') }}">Skills</a></li>
                            <!--<li class="nav-item"><a class="nav-link" href="projects.html">Projetos</a></li>-->
                            <li class="nav-item"><a class="nav-link" href="{{ route('portfolio') }}#contato">Contato</a></li>
                        </ul>
                    </div>
                </div>
            </nav>

            @yield('conteudo')

            <footer class="bg-white py-4 mt-auto">
                <div class="container px-5">
                    <div class="row align-items-center justify-content-between flex-column flex-sm-row">
                        <div class="col-auto"><div class="small m-0">Copyright &copy; Thiago César 2023</div></div>
                        <div class="col-auto">
                            <a class="small">Espero que você esteja bem.</a>
                        </div>
                    </div>
                </div>
            </footer>
        </main>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
            <script src="{{ asset('portfolio/js/scripts.js') }}"></script>
        </body>
    </html>
