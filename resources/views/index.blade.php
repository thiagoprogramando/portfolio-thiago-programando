@extends('layout')
@section('conteudo')
    <header class="py-5">
        <div class="container px-5 pb-5">
            <div class="row gx-5 align-items-center">
                <div class="col-xxl-5">
                    <div class="text-center text-xxl-start">
                        <div class="badge bg-gradient-primary-to-secondary text-white mb-4">
                            <div class="text-uppercase">Designer &middot; Desenvolvedor &middot; Empreendedor</div>
                        </div>
                        <div class="fs-3 fw-light text-muted">Com licença, posso ajudar você?</div>
                        <h1 class="display-3 fw-bolder mb-5"><span class="text-gradient d-inline">Acredito que podemos ir longe!</span></h1>
                        <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xxl-start mb-3">
                            <a class="btn btn-primary btn-lg px-5 py-3 me-sm-3 fs-6 fw-bolder" href="{{ route('skill') }}">Skills</a>
                            <a class="btn btn-outline-dark btn-lg px-5 py-3 fs-6 fw-bolder" href="https://meucontatoai.com//hefesto">WhatsApp</a>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-7">
                    <div class="d-flex justify-content-center mt-5 mt-xxl-0">
                        <div class="profile bg-gradient-primary-to-secondary">
                            <img class="profile-img" src="{{ asset('portfolio/assets/profile.png') }}"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <section id="contato" class="bg-light py-5">
        <div class="container px-5">
            <div class="row gx-5 justify-content-center">
                <div class="col-xxl-8">
                    <div class="text-center my-5">
                        <h2 class="display-5 fw-bolder"><span class="text-gradient d-inline">Sobre</span></h2>
                        <p class="lead fw-light mb-4">Meu nome é Thiago César, desenvolvedor Web e empreendedor.</p>
                        <p class="text-muted">Eu poderia expressar mil erros e virtudes, mas não é para isso que você chegou até aqui! Então, vamos ao que interessa. Qual o seu negócio e como posso te ajudar?</p>
                        <div class="d-flex justify-content-center fs-2 gap-4">
                            <a class="text-gradient" target="_blank" href="https://www.instagram.com/thiago_programando/"><i class="bi bi-instagram"></i></a>
                            <a class="text-gradient" target="_blank" href="https://meucontatoai.com//hefesto"><i class="bi bi-whatsapp"></i></a>
                            <a class="text-gradient" target="_blank" href="https://www.linkedin.com/in/thiago-cesar-dev/"><i class="bi bi-linkedin"></i></a>
                            <a class="text-gradient" target="_blank" href="https://github.com/thiagoprogramando"><i class="bi bi-github"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
