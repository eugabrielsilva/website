<!DOCTYPE html>
<html>

<head>
    <title>Gabriel Silva | Web Developer</title>
    <meta name="viewport" content="width=device-width, height=device-height, maximum-scale=1.0, user-scalable=no, initial-scale=1.0">

    <!-- CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <!-- Menu -->
    <section class="menu">
        <div class="list-group" id="menu">
            <a class="list-group-item" href="#home">HOME</a>
            <a class="list-group-item" href="#sobre">SOBRE</a>
            <a class="list-group-item" href="#portfolio">PORTFÓLIO</a>
            <a class="list-group-item" href="#contato">CONTATO</a>
        </div>
    </section>

    <!-- Main -->
    <div class="wrapper" data-bs-spy="scroll" data-bs-target="#menu">

        <!-- Home -->
        <section class="home" id="home">
            <video src="assets/video-bg.mp4" loop muted autoplay playsinline></video>
            <div class="container">
                <div class="row principal justify-content-center">
                    <div class="col-lg-4">
                        <div class="title">
                            <h1>GABRIEL SILVA</h1>
                            <h2>WEB DEVELOPER</h2>
                        </div>
                    </div>
                </div>
                <img src="assets/images/arrow.png" class="arrow">
            </div>
        </section>

        <!-- Sobre -->
        <section class="sobre" id="sobre">
            <div class="container">
                <div class="row principal">
                    <div class="col-lg-5 offset-lg-1">

                    </div>
                    <div class="col-lg-5">
                        <h1>Oi, eu sou o Gabriel!</h1>
                        <div class="texto">
                            Graduando em Análise e Desenvolvimento de Sistemas, trabalho com desenvolvimento full-stack para web. Tenho vasta experiência em websites institucionais com foco em marketing digital, desenvolvimento de e-catálogos, sistemas online e sistemas de gerenciamento de conteúdo (CMS).
                        </div>
                        <div class="habilidades">
                            <h5>Linguagens</h5>
                            <div class="row">
                                <div class="col-lg-3">
                                    <i class="fas fa-check-circle"></i>HTML
                                </div>
                                <div class="col-lg-3">
                                    <i class="fas fa-check-circle"></i>PHP
                                </div>
                                <div class="col-lg-3">
                                    <i class="fas fa-check-circle"></i>CSS / SCSS
                                </div>
                                <div class="col-lg-3">
                                    <i class="fas fa-check-circle"></i>JAVASCRIPT
                                </div>
                                <div class="col-lg-3">
                                    <i class="fas fa-check-circle"></i>MYSQL
                                </div>
                            </div>
                            <h5>Frameworks</h5>
                            <div class="row">
                                <div class="col-lg-3">
                                    <i class="fas fa-check-circle"></i>LARAVEL
                                </div>
                                <div class="col-lg-3">
                                    <i class="fas fa-check-circle"></i>ZEND
                                </div>
                                <div class="col-lg-3">
                                    <i class="fas fa-check-circle"></i>BOOTSTRAP
                                </div>
                                <div class="col-lg-3">
                                    <i class="fas fa-check-circle"></i>ANGULARJS
                                </div>
                            </div>
                            <h5>Ferramentas</h5>
                            <div class="row">
                                <div class="col-lg-3">
                                    <i class="fas fa-check-circle"></i>GIT
                                </div>
                                <div class="col-lg-3">
                                    <i class="fas fa-check-circle"></i>PHOTOSHOP
                                </div>
                                <div class="col-lg-3">
                                    <i class="fas fa-check-circle"></i>CORELDRAW
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Portfólio -->
        <section class="portfolio" id="portfolio">
            <div class="container">
                <div class="row principal">
                    <div class="col-lg-10 offset-lg-1">
                        <h1>PORTFÓLIO</h1>
                        <div class="portfolio">
                            <div class="row">
                                <div class="col-lg-3">
                                    <a href="https://glowie.tk" target="_blank">
                                        <img src="assets/portfolio/glowie.png">
                                        <div class="caption">Glowie Framework</div>
                                    </a>
                                </div>
                                <div class="col-lg-3">
                                    <a href="https://clinicasaomatheusgo.com.br" target="_blank">
                                        <img src="assets/portfolio/saomatheus.png">
                                        <div class="caption">Clínica São Matheus</div>
                                    </a>
                                </div>
                                <div class="col-lg-3">
                                    <a href="https://cristianegusmao.com.br" target="_blank">
                                        <img src="assets/portfolio/cristiane.png">
                                        <div class="caption">Dra. Cristiane Gusmão</div>
                                    </a>
                                </div>
                                <div class="col-lg-3">
                                    <a href="https://vccont.com.br" target="_blank">
                                        <img src="assets/portfolio/vccont.png">
                                        <div class="caption">VCcont</div>
                                    </a>
                                </div>
                                <div class="col-lg-3">
                                    <a href="https://clinicalipohd.com.br" target="_blank">
                                        <img src="assets/portfolio/clinicahd.png">
                                        <div class="caption">Clínica HD</div>
                                    </a>
                                </div>
                                <div class="col-lg-3">
                                    <a href="https://crieseubanco.com.br" target="_blank">
                                        <img src="assets/portfolio/crieseubanco.png">
                                        <div class="caption">Crie Seu Banco Digital</div>
                                    </a>
                                </div>
                                <div class="col-lg-3">
                                    <a href="https://marcelocaselli.com.br" target="_blank">
                                        <img src="assets/portfolio/caselli.png">
                                        <div class="caption">Dr. Marcelo Caselli</div>
                                    </a>
                                </div>
                                <div class="col-lg-3">
                                    <a href="https://trattofmx.com.br" target="_blank">
                                        <img src="assets/portfolio/trattofmx.png">
                                        <div class="caption">Tratto Agronegócios</div>
                                    </a>
                                </div>
                                <div class="col-lg-3">
                                    <a href="https://drgilbertocardoso.com.br" target="_blank">
                                        <img src="assets/portfolio/drgilberto.png">
                                        <div class="caption">Dr. Gilberto Cardoso</div>
                                    </a>
                                </div>
                                <div class="col-lg-3">
                                    <a href="https://embalagenspiloto.com.br" target="_blank">
                                        <img src="assets/portfolio/piloto.png">
                                        <div class="caption">Embalagens Piloto</div>
                                    </a>
                                </div>
                                <div class="col-lg-3">
                                    <a href="https://mascaraslifeprotect.com.br" target="_blank">
                                        <img src="assets/portfolio/lifeprotect.png">
                                        <div class="caption">Life Protect</div>
                                    </a>
                                </div>
                                <div class="col-lg-3">
                                    <a href="https://wikisistemas.com.br" target="_blank">
                                        <img src="assets/portfolio/wiki.png">
                                        <div class="caption">Wiki Sistemas</div>
                                    </a>
                                </div>
                                <div class="col-lg-3">
                                    <a href="http://drluizotaviocorrea.com.br" target="_blank">
                                        <img src="assets/portfolio/drluiz.png">
                                        <div class="caption">Dr. Luiz Otávio Corrêa</div>
                                    </a>
                                </div>
                                <div class="col-lg-3">
                                    <a href="https://hospitalmaya.com.br" target="_blank">
                                        <img src="assets/portfolio/hospitalmaya.png">
                                        <div class="caption">Hospital Maya</div>
                                    </a>
                                </div>
                                <div class="col-lg-3">
                                    <a href="https://vendal.com.br/condominios-logisticos" target="_blank">
                                        <img src="assets/portfolio/vendal.png">
                                        <div class="caption">Vendal Empreendimentos</div>
                                    </a>
                                </div>
                                <div class="col-lg-3">
                                    <a href="https://gynaliancas.com.br" target="_blank">
                                        <img src="assets/portfolio/gyn.png">
                                        <div class="caption">Gyn Alianças</div>
                                    </a>
                                </div>
                                <div class="col-lg-3">
                                    <a href="https://alreletrica.com.br" target="_blank">
                                        <img src="assets/portfolio/alr.png">
                                        <div class="caption">ALR Materiais Elétricos</div>
                                    </a>
                                </div>
                                <div class="col-lg-3">
                                    <a href="https://jmempilhadeira.com.br" target="_blank">
                                        <img src="assets/portfolio/jmempilhadeira.png">
                                        <div class="caption">JM Empilhadeira</div>
                                    </a>
                                </div>
                                <div class="col-lg-3">
                                    <a href="https://safrahomecenter.com.br" target="_blank">
                                        <img src="assets/portfolio/safra.png">
                                        <div class="caption">Safra Home Center</div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Contato -->
        <section class="contato" id="contato">
            <div class="container">
                <div class="row-principal">
                    aaa
                </div>
            </div>
        </section>
    </div>

    <!-- JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.1/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/scripts.js"></script>
</body>

</html>