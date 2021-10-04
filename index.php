<?php
session_start();
$_SESSION['token'] = bin2hex(random_bytes(32));
$version = md5('04/10/2021 12:14');
?>

<!DOCTYPE html>
<html>

<head>
    <title>Gabriel Silva | Web Developer</title>

    <!-- Meta tags -->
    <meta name="viewport" content="width=device-width, height=device-height, user-scalable=no, initial-scale=1">
    <meta charset="UTF-8">
    <meta name="robots" content="index, nofollow">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Content-type" content="text/html; charset=utf-8">
    <meta name="format-detection" content="telephone=no">
    <meta name="imagetoolbar" content="no">
    <meta name="description" content="Gabriel Silva é um desenvolvedor web full stack com experiência em sites com foco em marketing digital e sistemas online.">
    <meta property="og:site_name" content="Gabriel Silva | Web Developer">
    <meta property="og:url" content="https://eugabrielsilva.tk">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Gabriel Silva | Web Developer">
    <meta property="og:image" content="ogicon.png?version=<?= $version ?>">
    <meta property="og:description" content="Gabriel Silva é um desenvolvedor web full stack com experiência em sites com foco em marketing digital e sistemas online.">
    <meta name="twitter:card" content="summary">
    <meta name="csrf_token" content="<?= $_SESSION['token'] ?>">
    <meta name="twitter:title" content="Gabriel Silva | Web Developer">
    <meta name="twitter:description" content="Gabriel Silva é um desenvolvedor web full stack com experiência em sites com foco em marketing digital e sistemas online.">

    <!-- CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style.css?version=<?= $version ?>">
    <link rel="shortcut icon" href="assets/images/favicon.png?version=<?= $version ?>">
    <link rel="icon" href="assets/images/favicon.png?version=<?= $version ?>">
    <link rel="apple-touch-icon" href="assets/images/favicon.png?version=<?= $version ?>">
</head>

<body>
    <!-- Preloader -->
    <section class="preloader">
        <img src="assets/images/loader.gif">
    </section>

    <!-- Menu -->
    <section class="menu">
        <div class="list-group" id="menu">
            <a class="list-group-item" href="#home" onclick="scrollToElement(event, '#home')">HOME</a>
            <a class="list-group-item" href="#sobre" onclick="scrollToElement(event, '#sobre')">SOBRE</a>
            <a class="list-group-item" href="#portfolio" onclick="scrollToElement(event, '#portfolio')">PORTFÓLIO</a>
            <a class="list-group-item" href="#contato" onclick="scrollToElement(event, '#contato')">CONTATO</a>
        </div>
    </section>
    <section class="menu-mobile">
        <a href="#" onclick="toggleMenu(event)" class="btn-menu"><i class="fas fa-bars"></i></a>
        <div class="menu-dropdown">
            <a href="#" onclick="toggleMenu(event)" class="btn-fechar hide"><i class="fas fa-times"></i></a>
            <div class="in-menu">
                <a href="#home" onclick="scrollToElement(event, '#home', true)">HOME</a>
                <a href="#sobre" onclick="scrollToElement(event, '#sobre', true)">SOBRE</a>
                <a href="#portfolio" onclick="scrollToElement(event, '#portfolio', true)">PORTFÓLIO</a>
                <a href="#contato" onclick="scrollToElement(event, '#contato', true)">CONTATO</a>
            </div>
        </div>
    </section>

    <!-- Main -->
    <div class="wrapper" data-bs-spy="scroll" data-bs-target="#menu">

        <!-- Home -->
        <section class="home" id="home">
            <video poster="assets/images/video-poster.png?version=<?= $version ?>" src="assets/video-bg.mp4?version=<?= $version ?>" loop muted autoplay playsinline></video>
            <div class="container">
                <div class="title">
                    <h1>GABRIEL SILVA</h1>
                    <h2>WEB DEVELOPER</h2>
                </div>
                <div class="contatos">
                    <a href="https://wa.me/5562998358851" target="_blank" class="phone"><i class="fab fa-whatsapp"></i></a>
                    <a href="mailto:contato@eugabrielsilva.tk" target="_blank" class="phone"><i class="fas fa-envelope"></i></a>
                    <a href="https://instagram.com/eugabrielsilva__" target="_blank" class="phone"><i class="fab fa-instagram"></i></a>
                    <a href="https://linkedin.com/in/gabrieloliveira30" target="_blank" class="phone"><i class="fab fa-linkedin"></i></a>
                    <a href="https://github.com/eugabrielsilva" target="_blank" class="phone"><i class="fab fa-github"></i></a>
                </div>
                <img src="assets/images/arrow.png" class="arrow">
            </div>
        </section>

        <!-- Sobre -->
        <section class="sobre" id="sobre">
            <div class="container">
                <div class="row principal">
                    <div class="col-lg-4 col-xl-4 col-xxl-5 offset-xl-1 px-lg-4">
                        <img src="assets/images/foto.png?version=<?= $version ?>" class="foto">
                    </div>
                    <div class="col-lg-8 col-xl-6 col-xxl-5 pe-lg-5">
                        <h1>Oi, eu sou o Gabriel!</h1>
                        <div class="texto">
                            Graduando em Análise e Desenvolvimento de Sistemas, trabalho a 5 anos com desenvolvimento full stack para web. Tenho vasta experiência em websites institucionais com foco em marketing digital, implementação de layouts responsivos, desenvolvimento de e-catálogos, sistemas online em PHP e sistemas de gerenciamento de conteúdo (CMS).
                        </div>
                        <div class="habilidades">
                            <h5>Linguagens que eu amo:</h5>
                            <div class="d-flex flex-wrap justify-content-center justify-content-lg-between">
                                <div class="item">
                                    <i class="fas fa-check-circle"></i>PHP
                                </div>
                                <div class="item">
                                    <i class="fas fa-check-circle"></i>HTML
                                </div>
                                <div class="item">
                                    <i class="fas fa-check-circle"></i>CSS / SCSS
                                </div>
                                <div class="item">
                                    <i class="fas fa-check-circle"></i>JAVASCRIPT
                                </div>
                                <div class="item">
                                    <i class="fas fa-check-circle"></i>MYSQL
                                </div>
                            </div>
                            <h5>Frameworks que eu trabalho:</h5>
                            <div class="d-flex flex-wrap justify-content-center justify-content-lg-between">
                                <div class="item">
                                    <i class="fas fa-check-circle"></i>LARAVEL
                                </div>
                                <div class="item">
                                    <i class="fas fa-check-circle"></i>ZEND
                                </div>
                                <div class="item">
                                    <i class="fas fa-check-circle"></i>BOOTSTRAP
                                </div>
                                <div class="item">
                                    <i class="fas fa-check-circle"></i>ANGULARJS
                                </div>
                                <div class="item">
                                    <i class="fas fa-check-circle"></i>JQUERY
                                </div>
                            </div>
                            <h5>Ferramentas que eu utilizo:</h5>
                            <div class="d-flex flex-wrap justify-content-center justify-content-lg-between">
                                <div class="item">
                                    <i class="fas fa-check-circle"></i>GIT
                                </div>
                                <div class="item">
                                    <i class="fas fa-check-circle"></i>SSH
                                </div>
                                <div class="item">
                                    <i class="fas fa-check-circle"></i>PHOTOSHOP
                                </div>
                                <div class="item">
                                    <i class="fas fa-check-circle"></i>CORELDRAW
                                </div>
                                <div class="item">
                                    <i class="fas fa-check-circle"></i>OFFICE
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
                                <div class="col-sm-6 col-lg-4 col-xxl-3">
                                    <a href="https://glowie.tk" target="_blank">
                                        <img src="assets/portfolio/glowie.png?version=<?= $version ?>">
                                        <div class="caption">Glowie Framework</div>
                                    </a>
                                </div>
                                <div class="col-sm-6 col-lg-4 col-xxl-3">
                                    <a href="https://nuvemmoda.com.br" target="_blank">
                                        <img src="assets/portfolio/nuvem.png?version=<?= $version ?>">
                                        <div class="caption">Nuvem Moda</div>
                                    </a>
                                </div>
                                <div class="col-sm-6 col-lg-4 col-xxl-3">
                                    <a href="https://clinicasaomatheusgo.com.br" target="_blank">
                                        <img src="assets/portfolio/saomatheus.png?version=<?= $version ?>">
                                        <div class="caption">Clínica São Matheus</div>
                                    </a>
                                </div>
                                <div class="col-sm-6 col-lg-4 col-xxl-3">
                                    <a href="https://implantecapilarprohair.com.br" target="_blank">
                                        <img src="assets/portfolio/prohair.png?version=<?= $version ?>">
                                        <div class="caption">Clínica Prohair</div>
                                    </a>
                                </div>
                                <div class="col-sm-6 col-lg-4 col-xxl-3">
                                    <a href="https://cristianegusmao.com.br" target="_blank">
                                        <img src="assets/portfolio/cristiane.png?version=<?= $version ?>">
                                        <div class="caption">Dra. Cristiane Gusmão</div>
                                    </a>
                                </div>
                                <div class="col-sm-6 col-lg-4 col-xxl-3">
                                    <a href="https://institutoabracodemae.org.br" target="_blank">
                                        <img src="assets/portfolio/abraco.png?version=<?= $version ?>">
                                        <div class="caption">Instituto Abraço de Mãe</div>
                                    </a>
                                </div>
                                <div class="col-sm-6 col-lg-4 col-xxl-3">
                                    <a href="https://vccont.com.br" target="_blank">
                                        <img src="assets/portfolio/vccont.png?version=<?= $version ?>">
                                        <div class="caption">VCcont</div>
                                    </a>
                                </div>
                                <div class="col-sm-6 col-lg-4 col-xxl-3">
                                    <a href="https://clinicalipohd.com.br" target="_blank">
                                        <img src="assets/portfolio/clinicahd.png?version=<?= $version ?>">
                                        <div class="caption">Clínica HD</div>
                                    </a>
                                </div>
                                <div class="col-sm-6 col-lg-4 col-xxl-3">
                                    <a href="https://crieseubanco.com.br" target="_blank">
                                        <img src="assets/portfolio/crieseubanco.png?version=<?= $version ?>">
                                        <div class="caption">Crie Seu Banco Digital</div>
                                    </a>
                                </div>
                                <div class="col-sm-6 col-lg-4 col-xxl-3">
                                    <a href="https://marcelocaselli.com.br" target="_blank">
                                        <img src="assets/portfolio/caselli.png?version=<?= $version ?>">
                                        <div class="caption">Dr. Marcelo Caselli</div>
                                    </a>
                                </div>
                                <div class="col-sm-6 col-lg-4 col-xxl-3">
                                    <a href="https://trattofmx.com.br" target="_blank">
                                        <img src="assets/portfolio/trattofmx.png?version=<?= $version ?>">
                                        <div class="caption">Tratto Agronegócios</div>
                                    </a>
                                </div>
                                <div class="col-sm-6 col-lg-4 col-xxl-3">
                                    <a href="https://drgilbertocardoso.com.br" target="_blank">
                                        <img src="assets/portfolio/drgilberto.png?version=<?= $version ?>">
                                        <div class="caption">Dr. Gilberto Cardoso</div>
                                    </a>
                                </div>
                                <div class="col-sm-6 col-lg-4 col-xxl-3">
                                    <a href="https://embalagenspiloto.com.br" target="_blank">
                                        <img src="assets/portfolio/piloto.png?version=<?= $version ?>">
                                        <div class="caption">Embalagens Piloto</div>
                                    </a>
                                </div>
                                <div class="col-sm-6 col-lg-4 col-xxl-3">
                                    <a href="https://mascaraslifeprotect.com.br" target="_blank">
                                        <img src="assets/portfolio/lifeprotect.png?version=<?= $version ?>">
                                        <div class="caption">Life Protect</div>
                                    </a>
                                </div>
                                <div class="col-sm-6 col-lg-4 col-xxl-3">
                                    <a href="https://wikisistemas.com.br" target="_blank">
                                        <img src="assets/portfolio/wiki.png?version=<?= $version ?>">
                                        <div class="caption">Wiki Sistemas</div>
                                    </a>
                                </div>
                                <div class="col-sm-6 col-lg-4 col-xxl-3">
                                    <a href="http://drluizotaviocorrea.com.br" target="_blank">
                                        <img src="assets/portfolio/drluiz.png?version=<?= $version ?>">
                                        <div class="caption">Dr. Luiz Otávio Corrêa</div>
                                    </a>
                                </div>
                                <div class="col-sm-6 col-lg-4 col-xxl-3">
                                    <a href="https://hospitalmaya.com.br" target="_blank">
                                        <img src="assets/portfolio/hospitalmaya.png?version=<?= $version ?>">
                                        <div class="caption">Hospital Maya</div>
                                    </a>
                                </div>
                                <div class="col-sm-6 col-lg-4 col-xxl-3">
                                    <a href="https://vendal.com.br/condominios-logisticos" target="_blank">
                                        <img src="assets/portfolio/vendal.png?version=<?= $version ?>">
                                        <div class="caption">Vendal Empreendimentos</div>
                                    </a>
                                </div>
                                <div class="col-sm-6 col-lg-4 col-xxl-3">
                                    <a href="https://gynaliancas.com.br" target="_blank">
                                        <img src="assets/portfolio/gyn.png?version=<?= $version ?>">
                                        <div class="caption">Gyn Alianças</div>
                                    </a>
                                </div>
                                <div class="col-sm-6 col-lg-4 col-xxl-3">
                                    <a href="https://alreletrica.com.br" target="_blank">
                                        <img src="assets/portfolio/alr.png">
                                        <div class="caption">ALR Materiais Elétricos</div>
                                    </a>
                                </div>
                                <div class="col-sm-6 col-lg-4 col-xxl-3">
                                    <a href="https://jmempilhadeira.com.br" target="_blank">
                                        <img src="assets/portfolio/jmempilhadeira.png?version=<?= $version ?>">
                                        <div class="caption">JM Empilhadeira</div>
                                    </a>
                                </div>
                                <div class="col-sm-6 col-lg-4 col-xxl-3">
                                    <a href="https://safrahomecenter.com.br" target="_blank">
                                        <img src="assets/portfolio/safra.png?version=<?= $version ?>">
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
                <div class="row principal align-items-start">
                    <div class="col-lg-10 offset-lg-1">
                        <h1>CONTATO</h1>
                    </div>
                    <div class="col-md-4 offset-md-2 pe-md-4 pe-xxl-5">
                        <form onsubmit="enviarEmail(event)">
                            <input id="form_nome" required type="text" placeholder="Nome">
                            <input id="form_email" required type="email" placeholder="E-mail">
                            <input id="form_telefone" type="text" placeholder="Telefone">
                            <textarea id="form_mensagem" placeholder="Mensagem"></textarea>
                            <button id="btn-enviar">ENVIAR</button>
                        </form>
                    </div>
                    <div class="col-md-5 ps-lg-5">
                        <a href="https://wa.me/5562998358851" target="_blank" class="phone">
                            <i class="fab fa-whatsapp"></i>
                            <span>
                                WHATSAPP
                                <strong>(62) 99835-8851</strong>
                            </span>
                        </a>
                        <a href="mailto:contato@eugabrielsilva.tk" target="_blank" class="phone">
                            <i class="fas fa-envelope"></i>
                            <span>
                                E-MAIL
                                <strong>contato@eugabrielsilva.tk</strong>
                            </span>
                        </a>
                        <a href="https://instagram.com/eugabrielsilva__" target="_blank" class="phone">
                            <i class="fab fa-instagram"></i>
                            <span>
                                INSTAGRAM
                                <strong>@EUGABRIELSILVA__</strong>
                            </span>
                        </a>
                        <a href="https://linkedin.com/in/gabrieloliveira30" target="_blank" class="phone">
                            <i class="fab fa-linkedin"></i>
                            <span>
                                LINKEDIN
                                <strong>/GABRIELOLIVEIRA30</strong>
                            </span>
                        </a>
                        <a href="https://github.com/eugabrielsilva" target="_blank" class="phone">
                            <i class="fab fa-github"></i>
                            <span>
                                GITHUB
                                <strong>/EUGABRIELSILVA</strong>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Footer -->
        <section class="footer">
            <div class="container">
                © Gabriel Silva - <?= date('Y') ?>
            </div>
        </section>
    </div>

    <!-- JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.1/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/scripts.js?version=<?= $version ?>"></script>
</body>

</html>