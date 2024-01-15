<?php
session_start();
if (empty($_SESSION['token'])) $_SESSION['token'] = bin2hex(random_bytes(32));
$version = md5('15/01/2024 16:30');
$message = urlencode('Olá Gabriel, vim pelo seu site e gostaria de conhecer mais sobre seu trabalho.');
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Gabriel Silva | Full Stack Web Developer PHP/JS/Laravel/AngularJS</title>

    <!-- Meta tags -->
    <meta name="viewport" content="width=device-width, height=device-height, user-scalable=no, initial-scale=1">
    <meta charset="UTF-8">
    <meta name="language" content="pt">
    <meta http-equiv="content-language" content="pt">
    <meta name="robots" content="index, follow">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Content-type" content="text/html; charset=utf-8">
    <meta name="format-detection" content="telephone=no">
    <meta name="imagetoolbar" content="no">
    <meta name="author" content="Gabriel Silva">
    <meta name="reply-to" content="contato@eugabrielsilva.tk">
    <meta name="rating" content="general">
    <meta name="description" content="Gabriel Silva é um desenvolvedor web full stack com vasta experiência em PHP e JavaScript.">
    <meta name="abstract" content="Gabriel Silva é um desenvolvedor web full stack com vasta experiência em PHP e JavaScript.">
    <meta name="application-name" content="Gabriel Silva | Full Stack Web Developer PHP/JS/Laravel/AngularJS">
    <meta name="keywords" content="desenvolvedor web, PHP, Laravel, JavaScript, AngularJS, jQuery, desenvolvimento web, programação PHP, backend PHP, desenvolvimento de aplicativos PHP, desenvolvimento web com JavaScript, especialista em AngularJS, desenvolvedor front-end, programação jQuery, framework Laravel, desenvolvedor full-stack, desenvolvimento ágil Laravel, consultoria Laravel, otimização de desempenho PHP, desenvolvimento web responsivo, freelancer PHP, aplicativos web, desenvolvedor web especializado, desenvolvimento web personalizado, sites dinâmicos, desenvolvimento de aplicativos web modernos" />

    <link rel="canonical" href="https://eugabrielsilva.tk">

    <meta property="og:site_name" content="Gabriel Silva | Full Stack Web Developer PHP/JS/Laravel/AngularJS">
    <meta property="og:url" content="https://eugabrielsilva.tk">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Gabriel Silva | Full Stack Web Developer PHP/JS/Laravel/AngularJS">
    <meta property="og:image" content="https://eugabrielsilva.tk/assets/images/ogicon.webp?version=<?= $version ?>">
    <meta property="og:description" content="Gabriel Silva é um desenvolvedor web full stack com vasta experiência em PHP e JavaScript.">
    <meta property="og:locale" content="pt_BR">

    <meta property="twitter:image" content="https://eugabrielsilva.tk/assets/images/ogicon.webp?version=<?= $version ?>">
    <meta property="twitter:domain" content="eugabrielsilva.tk">
    <meta property="twitter:url" content="https://eugabrielsilva.tk">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Gabriel Silva | Full Stack Web Developer PHP/JS/Laravel">
    <meta name="twitter:description" content="Gabriel Silva é um desenvolvedor web full stack com vasta experiência em PHP e JavaScript.">

    <meta name="csrf_token" content="<?= $_SESSION['token'] ?>">

    <!-- CSS -->
    <link async defer rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css">
    <link async defer rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link async defer rel="stylesheet" href="assets/css/style.min.css?version=<?= $version ?>">
    <link async defer rel="shortcut icon" href="assets/images/favicon.webp?version=<?= $version ?>">
    <link async defer rel="icon" href="assets/images/favicon.webp?version=<?= $version ?>">
    <link async defer rel="apple-touch-icon" href="assets/images/favicon.webp?version=<?= $version ?>">
</head>

<body>
    <!-- Preloader -->
    <!-- <section class="preloader">
        <img loading="lazy" src="assets/images/loader.gif">
    </section> -->

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
            <video defer async loading="lazy" async defer poster="assets/images/video-poster.webp?version=<?= $version ?>" src="assets/video-bg.mp4?version=<?= $version ?>" loop muted autoplay playsinline></video>
            <div class="container">
                <div class="title">
                    <h1>GABRIEL SILVA</h1>
                    <h2>WEB DEVELOPER</h2>
                </div>
                <div class="contatos">
                    <a href="https://wa.me/5562998358851?text=<?= $message ?>" target="_blank" class="phone"><i class="fab fa-whatsapp"></i></a>
                    <a href="mailto:contato@eugabrielsilva.tk" target="_blank" class="phone"><i class="fas fa-envelope"></i></a>
                    <a href="https://instagram.com/eugabrielsilva__" target="_blank" class="phone"><i class="fab fa-instagram"></i></a>
                    <a href="https://linkedin.com/in/gabrieloliveira30" target="_blank" class="phone"><i class="fab fa-linkedin"></i></a>
                    <a href="https://github.com/eugabrielsilva" target="_blank" class="phone"><i class="fab fa-github"></i></a>
                </div>
                <img loading="lazy" src="assets/images/arrow.webp" class="arrow">
            </div>
        </section>

        <!-- Sobre -->
        <section class="sobre" id="sobre">
            <div class="container">
                <div class="row principal">
                    <div class="col-lg-4 col-xl-4 col-xxl-5 offset-xl-1 px-lg-4">
                        <img loading="lazy" src="assets/images/foto.webp?version=<?= $version ?>" class="foto">
                    </div>
                    <div class="col-lg-8 col-xl-6 col-xxl-5 pe-lg-5">
                        <h1>Olá, eu sou o Gabriel!</h1>
                        <div class="texto">
                            Graduado em Análise e Desenvolvimento de Sistemas e Pós-graduado em Engenharia de Software, trabalho a mais de 5 anos com <strong>desenvolvimento full stack para web</strong>. Possuo sólida experiência em websites e catálogos virtuais, implementação de layouts responsivos, desenvolvimento de aplicações em <strong>PHP e Javascript</strong>, gerenciamento de bancos de dados, sistemas web usando padrões de desenvolvimento MVC, APIs REST e integrações com sistemas.
                        </div>
                        <div class="habilidades">
                            <h5>Linguagens que eu amo ❤️:</h5>
                            <div class="d-flex flex-wrap justify-content-center justify-content-lg-between">
                                <div class="item">
                                    <i class="fas fa-check-circle"></i>PHP
                                </div>
                                <div class="item">
                                    <i class="fas fa-check-circle"></i>JAVASCRIPT
                                </div>
                                <div class="item">
                                    <i class="fas fa-check-circle"></i>HTML
                                </div>
                                <div class="item">
                                    <i class="fas fa-check-circle"></i>CSS / SCSS
                                </div>
                                <div class="item">
                                    <i class="fas fa-check-circle"></i>MYSQL
                                </div>
                            </div>
                            <h5>Frameworks que eu trabalho 🧑🏻‍💻:</h5>
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
                            <h5>Ferramentas que eu utilizo 🛠:</h5>
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
                                    <i class="fas fa-check-circle"></i>FIGMA
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
                        <h1>MEU PORTFÓLIO</h1>
                        <div class="portfolio">
                            <div class="row">
                                <div class="col-sm-6 col-lg-4 col-xxl-3">
                                    <a href="https://eugabrielsilva.tk/glowie" target="_blank">
                                        <img loading="lazy" src="assets/portfolio/glowie.webp?version=<?= $version ?>">
                                        <div class="caption">Glowie Framework</div>
                                    </a>
                                </div>
                                <div class="col-sm-6 col-lg-4 col-xxl-3">
                                    <a href="https://crm.raddar.digital" target="_blank">
                                        <img loading="lazy" src="assets/portfolio/crm.webp?version=<?= $version ?>">
                                        <div class="caption">CRM Raddar Digital</div>
                                    </a>
                                </div>
                                <div class="col-sm-6 col-lg-4 col-xxl-3">
                                    <a href="https://iog.net.br" target="_blank">
                                        <img loading="lazy" src="assets/portfolio/iog.webp?version=<?= $version ?>">
                                        <div class="caption">Instituto de Olhos de Goiânia</div>
                                    </a>
                                </div>
                                <div class="col-sm-6 col-lg-4 col-xxl-3">
                                    <a href="https://dentaladelar.com.br" target="_blank">
                                        <img loading="lazy" src="assets/portfolio/dental.webp?version=<?= $version ?>">
                                        <div class="caption">Dental Adelar</div>
                                    </a>
                                </div>
                                <div class="col-sm-6 col-lg-4 col-xxl-3">
                                    <a href="https://dentaladelar.com.br/autoridade-redes-sociais" target="_blank">
                                        <img loading="lazy" src="assets/portfolio/dental-lp.webp?version=<?= $version ?>">
                                        <div class="caption">Dental Adelar - Landing page</div>
                                    </a>
                                </div>
                                <div class="col-sm-6 col-lg-4 col-xxl-3">
                                    <a href="https://alreletrica.com.br" target="_blank">
                                        <img loading="lazy" src="assets/portfolio/alr.webp?version=<?= $version ?>">
                                        <div class="caption">ALR Materiais Elétricos</div>
                                    </a>
                                </div>
                                <div class="col-sm-6 col-lg-4 col-xxl-3">
                                    <a href="https://clinicasaomatheusgo.com.br" target="_blank">
                                        <img loading="lazy" src="assets/portfolio/saomatheus.webp?version=<?= $version ?>">
                                        <div class="caption">Clínica São Matheus</div>
                                    </a>
                                </div>
                                <div class="col-sm-6 col-lg-4 col-xxl-3">
                                    <a href="https://raddar.digital" target="_blank">
                                        <img loading="lazy" src="assets/portfolio/raddar.webp?version=<?= $version ?>">
                                        <div class="caption">Raddar Digital</div>
                                    </a>
                                </div>
                                <div class="col-sm-6 col-lg-4 col-xxl-3">
                                    <a href="https://raddar.com.br" target="_blank">
                                        <img loading="lazy" src="assets/portfolio/raddar-lp.webp?version=<?= $version ?>">
                                        <div class="caption">Raddar Digital - Landing Page</div>
                                    </a>
                                </div>
                                <div class="col-sm-6 col-lg-4 col-xxl-3">
                                    <a href="https://nuvemmoda.com.br" target="_blank">
                                        <img loading="lazy" src="assets/portfolio/nuvem.webp?version=<?= $version ?>">
                                        <div class="caption">Nuvem Moda</div>
                                    </a>
                                </div>
                                <div class="col-sm-6 col-lg-4 col-xxl-3">
                                    <a href="https://plasbig.com.br" target="_blank">
                                        <img loading="lazy" src="assets/portfolio/plasbig.webp?version=<?= $version ?>">
                                        <div class="caption">Plasbig</div>
                                    </a>
                                </div>
                                <div class="col-sm-6 col-lg-4 col-xxl-3">
                                    <a href="https://domambientes.com.br" target="_blank">
                                        <img loading="lazy" src="assets/portfolio/dom.webp?version=<?= $version ?>">
                                        <div class="caption">DOM Ambientes</div>
                                    </a>
                                </div>
                            </div>
                            <div class="row collapse" id="portfolio-completo">
                                <div class="col-sm-6 col-lg-4 col-xxl-3">
                                    <a href="https://srfoodsafety.com.br/consultoria-de-alimentos" target="_blank">
                                        <img loading="lazy" src="assets/portfolio/food.webp?version=<?= $version ?>">
                                        <div class="caption">Sr. Food Safety</div>
                                    </a>
                                </div>
                                <div class="col-sm-6 col-lg-4 col-xxl-3">
                                    <a href="https://greenparkcaldasnovas.com.br" target="_blank">
                                        <img loading="lazy" src="assets/portfolio/green.webp?version=<?= $version ?>">
                                        <div class="caption">Green Park</div>
                                    </a>
                                </div>
                                <div class="col-sm-6 col-lg-4 col-xxl-3">
                                    <a href="https://drcalixto.com.br" target="_blank">
                                        <img loading="lazy" src="assets/portfolio/calixto.webp?version=<?= $version ?>">
                                        <div class="caption">Dr. Carlos Calixto</div>
                                    </a>
                                </div>
                                <div class="col-sm-6 col-lg-4 col-xxl-3">
                                    <a href="https://ortizholding.com.br" target="_blank">
                                        <img loading="lazy" src="assets/portfolio/ortiz.webp?version=<?= $version ?>">
                                        <div class="caption">Ortiz Holding</div>
                                    </a>
                                </div>
                                <div class="col-sm-6 col-lg-4 col-xxl-3">
                                    <a href="https://navesengenharia.com/financiamento-caixa" target="_blank">
                                        <img loading="lazy" src="assets/portfolio/naves.webp?version=<?= $version ?>">
                                        <div class="caption">Naves Engenharia</div>
                                    </a>
                                </div>
                                <div class="col-sm-6 col-lg-4 col-xxl-3">
                                    <a href="https://navesengenharia.com/imoveis-para-investir" target="_blank">
                                        <img loading="lazy" src="assets/portfolio/naves2.webp?version=<?= $version ?>">
                                        <div class="caption">Naves Engenharia - Landing Page</div>
                                    </a>
                                </div>
                                <div class="col-sm-6 col-lg-4 col-xxl-3">
                                    <a href="https://ti.coretecnologia.net.br" target="_blank">
                                        <img loading="lazy" src="assets/portfolio/core.webp?version=<?= $version ?>">
                                        <div class="caption">Core Tecnologia</div>
                                    </a>
                                </div>
                                <div class="col-sm-6 col-lg-4 col-xxl-3">
                                    <a href="https://sabbsolucoes.com.br/controladoria-e-contabilidade" target="_blank">
                                        <img loading="lazy" src="assets/portfolio/sabb.webp?version=<?= $version ?>">
                                        <div class="caption">Sabb Soluções</div>
                                    </a>
                                </div>
                                <!-- <div class="col-sm-6 col-lg-4 col-xxl-3">
                                    <a href="https://primesegtecnologia.com.br" target="_blank">
                                        <img loading="lazy" src="assets/portfolio/prime.webp?version=<?= $version ?>">
                                        <div class="caption">Prime Seg</div>
                                    </a>
                                </div> -->
                                <div class="col-sm-6 col-lg-4 col-xxl-3">
                                    <a href="https://implantecapilarprohair.com.br" target="_blank">
                                        <img loading="lazy" src="assets/portfolio/prohair.webp?version=<?= $version ?>">
                                        <div class="caption">Clínica Prohair</div>
                                    </a>
                                </div>
                                <div class="col-sm-6 col-lg-4 col-xxl-3">
                                    <a href="https://eugabrielsilva.tk/worship" target="_blank">
                                        <img loading="lazy" src="assets/portfolio/worship.webp?version=<?= $version ?>">
                                        <div class="caption">Worship Sounds</div>
                                    </a>
                                </div>
                                <div class="col-sm-6 col-lg-4 col-xxl-3">
                                    <a href="https://transform.net.br" target="_blank">
                                        <img loading="lazy" src="assets/portfolio/transform.webp?version=<?= $version ?>">
                                        <div class="caption">Transform Contabilidade</div>
                                    </a>
                                </div>
                                <!-- <div class="col-sm-6 col-lg-4 col-xxl-3">
                                    <a href="https://kapitalsolucoes.com.br" target="_blank">
                                        <img loading="lazy" src="assets/portfolio/kapital.webp?version=<?= $version ?>">
                                        <div class="caption">Kapital Bank</div>
                                    </a>
                                </div> -->
                                <div class="col-sm-6 col-lg-4 col-xxl-3">
                                    <a href="https://amedicadescartaveis.com.br" target="_blank">
                                        <img loading="lazy" src="assets/portfolio/amedica.webp?version=<?= $version ?>">
                                        <div class="caption">Amédica Descartáveis</div>
                                    </a>
                                </div>
                                <!-- <div class="col-sm-6 col-lg-4 col-xxl-3">
                                    <a href="https://institutoabracodemae.org.br" target="_blank">
                                        <img loading="lazy" src="assets/portfolio/abraco.webp?version=<?= $version ?>">
                                        <div class="caption">Instituto Abraço de Mãe</div>
                                    </a>
                                </div> -->
                                <!-- <div class="col-sm-6 col-lg-4 col-xxl-3">
                                    <a href="https://cristianegusmao.com.br" target="_blank">
                                        <img loading="lazy" src="assets/portfolio/cristiane.webp?version=<?= $version ?>">
                                        <div class="caption">Dra. Cristiane Gusmão</div>
                                    </a>
                                </div> -->
                                <div class="col-sm-6 col-lg-4 col-xxl-3">
                                    <a href="https://vccont.com.br" target="_blank">
                                        <img loading="lazy" src="assets/portfolio/vccont.webp?version=<?= $version ?>">
                                        <div class="caption">VCcont</div>
                                    </a>
                                </div>
                                <div class="col-sm-6 col-lg-4 col-xxl-3">
                                    <a href="https://clinicalipohd.com.br" target="_blank">
                                        <img loading="lazy" src="assets/portfolio/clinicahd.webp?version=<?= $version ?>">
                                        <div class="caption">Clínica HD</div>
                                    </a>
                                </div>
                                <div class="col-sm-6 col-lg-4 col-xxl-3">
                                    <a href="https://crieseubanco.com.br" target="_blank">
                                        <img loading="lazy" src="assets/portfolio/crieseubanco.webp?version=<?= $version ?>">
                                        <div class="caption">Crie Seu Banco Digital</div>
                                    </a>
                                </div>
                                <div class="col-sm-6 col-lg-4 col-xxl-3">
                                    <a href="https://universoagvnacional.com.br" target="_blank">
                                        <img loading="lazy" src="assets/portfolio/agv.webp?version=<?= $version ?>">
                                        <div class="caption">Universo AGV</div>
                                    </a>
                                </div>
                                <div class="col-sm-6 col-lg-4 col-xxl-3">
                                    <a href="https://gynaliancas.com.br" target="_blank">
                                        <img loading="lazy" src="assets/portfolio/gyn.webp?version=<?= $version ?>">
                                        <div class="caption">Gyn Alianças</div>
                                    </a>
                                </div>
                                <div class="col-sm-6 col-lg-4 col-xxl-3">
                                    <a href="https://marcelocaselli.com.br" target="_blank">
                                        <img loading="lazy" src="assets/portfolio/caselli.webp?version=<?= $version ?>">
                                        <div class="caption">Dr. Marcelo Caselli</div>
                                    </a>
                                </div>
                                <!-- <div class="col-sm-6 col-lg-4 col-xxl-3">
                                    <a href="https://trattofmx.com.br" target="_blank">
                                        <img loading="lazy" src="assets/portfolio/trattofmx.webp?version=<?= $version ?>">
                                        <div class="caption">Tratto Agronegócios</div>
                                    </a>
                                </div> -->
                                <div class="col-sm-6 col-lg-4 col-xxl-3">
                                    <a href="https://gomidias.com.br" target="_blank">
                                        <img loading="lazy" src="assets/portfolio/gomidias.webp?version=<?= $version ?>">
                                        <div class="caption">go!midias</div>
                                    </a>
                                </div>
                                <div class="col-sm-6 col-lg-4 col-xxl-3">
                                    <a href="https://www.jairmarcilio.adv.br/advogado-tributarista" target="_blank">
                                        <img loading="lazy" src="assets/portfolio/jair.webp?version=<?= $version ?>">
                                        <div class="caption">Jair Marcílio Advogados</div>
                                    </a>
                                </div>
                                <div class="col-sm-6 col-lg-4 col-xxl-3">
                                    <a href="https://flexbanner.com.br" target="_blank">
                                        <img loading="lazy" src="assets/portfolio/flexbanner.webp?version=<?= $version ?>">
                                        <div class="caption">Flex Banner</div>
                                    </a>
                                </div>
                                <div class="col-sm-6 col-lg-4 col-xxl-3">
                                    <a href="https://tubisa.com.br" target="_blank">
                                        <img loading="lazy" src="assets/portfolio/tubisa.webp?version=<?= $version ?>">
                                        <div class="caption">Tubisa</div>
                                    </a>
                                </div>
                                <!-- <div class="col-sm-6 col-lg-4 col-xxl-3">
                                    <a href="https://drgilbertocardoso.com.br" target="_blank">
                                        <img loading="lazy" src="assets/portfolio/drgilberto.webp?version=<?= $version ?>">
                                        <div class="caption">Dr. Gilberto Cardoso</div>
                                    </a>
                                </div> -->
                                <!-- <div class="col-sm-6 col-lg-4 col-xxl-3">
                                    <a href="https://embalagenspiloto.com.br" target="_blank">
                                        <img loading="lazy" src="assets/portfolio/piloto.webp?version=<?= $version ?>">
                                        <div class="caption">Embalagens Piloto</div>
                                    </a>
                                </div> -->
                                <!-- <div class="col-sm-6 col-lg-4 col-xxl-3">
                                    <a href="https://mascaraslifeprotect.com.br" target="_blank">
                                        <img loading="lazy" src="assets/portfolio/lifeprotect.webp?version=<?= $version ?>">
                                        <div class="caption">Life Protect</div>
                                    </a>
                                </div> -->
                                <div class="col-sm-6 col-lg-4 col-xxl-3">
                                    <a href="https://clinicacapelli.com.br" target="_blank">
                                        <img loading="lazy" src="assets/portfolio/capelli.webp?version=<?= $version ?>">
                                        <div class="caption">Clínica Capelli</div>
                                    </a>
                                </div>
                                <div class="col-sm-6 col-lg-4 col-xxl-3">
                                    <a href="https://saudepelve.com.br/ensinofisioterapiapelvica" target="_blank">
                                        <img loading="lazy" src="assets/portfolio/pelve.webp?version=<?= $version ?>">
                                        <div class="caption">Saúde Pelve</div>
                                    </a>
                                </div>
                                <div class="col-sm-6 col-lg-4 col-xxl-3">
                                    <a href="https://wikisistemas.com.br" target="_blank">
                                        <img loading="lazy" src="assets/portfolio/wiki.webp?version=<?= $version ?>">
                                        <div class="caption">Wiki Sistemas</div>
                                    </a>
                                </div>
                                <div class="col-sm-6 col-lg-4 col-xxl-3">
                                    <a href="https://minascouros.com.br" target="_blank">
                                        <img loading="lazy" src="assets/portfolio/minas.webp?version=<?= $version ?>">
                                        <div class="caption">Minas Couros</div>
                                    </a>
                                </div>
                                <!-- <div class="col-sm-6 col-lg-4 col-xxl-3">
                                    <a href="https://goldensolenergiasolar.com.br" target="_blank">
                                        <img loading="lazy" src="assets/portfolio/golden.webp?version=<?= $version ?>">
                                        <div class="caption">Golden Sol</div>
                                    </a>
                                </div> -->
                                <div class="col-sm-6 col-lg-4 col-xxl-3">
                                    <a href="https://drluizotaviocorrea.com.br" target="_blank">
                                        <img loading="lazy" src="assets/portfolio/drluiz.webp?version=<?= $version ?>">
                                        <div class="caption">Dr. Luiz Otávio Corrêa</div>
                                    </a>
                                </div>
                                <div class="col-sm-6 col-lg-4 col-xxl-3">
                                    <a href="https://hospitalmaya.com.br" target="_blank">
                                        <img loading="lazy" src="assets/portfolio/hospitalmaya.webp?version=<?= $version ?>">
                                        <div class="caption">Hospital Maya</div>
                                    </a>
                                </div>
                                <!-- <div class="col-sm-6 col-lg-4 col-xxl-3">
                                    <a href="https://vendal.com.br/condominios-logisticos" target="_blank">
                                        <img loading="lazy" src="assets/portfolio/vendal.webp?version=<?= $version ?>">
                                        <div class="caption">Vendal Empreendimentos</div>
                                    </a>
                                </div> -->
                                <div class="col-sm-6 col-lg-4 col-xxl-3">
                                    <a href="https://implantecapilarprohair.com.br/implante-capilar-fue" target="_blank">
                                        <img loading="lazy" src="assets/portfolio/lpprohair.webp?version=<?= $version ?>">
                                        <div class="caption">Implante Capilar Prohair</div>
                                    </a>
                                </div>
                                <div class="col-sm-6 col-lg-4 col-xxl-3">
                                    <a href="https://jmempilhadeira.com.br" target="_blank">
                                        <img loading="lazy" src="assets/portfolio/jmempilhadeira.webp?version=<?= $version ?>">
                                        <div class="caption">JM Empilhadeira</div>
                                    </a>
                                </div>
                                <div class="col-sm-6 col-lg-4 col-xxl-3">
                                    <a href="https://protecaoafamilia.com" target="_blank">
                                        <img loading="lazy" src="assets/portfolio/protecao.webp?version=<?= $version ?>">
                                        <div class="caption">Proteção à Família</div>
                                    </a>
                                </div>
                                <div class="col-sm-6 col-lg-4 col-xxl-3">
                                    <a href="https://viveiroambiental.com.br" target="_blank">
                                        <img loading="lazy" src="assets/portfolio/viveiro.webp?version=<?= $version ?>">
                                        <div class="caption">Viveiro Ambiental</div>
                                    </a>
                                </div>
                                <!-- <div class="col-sm-6 col-lg-4 col-xxl-3">
                                    <a href="https://lacobulls.com.br" target="_blank">
                                        <img loading="lazy" src="assets/portfolio/laco.webp?version=<?= $version ?>">
                                        <div class="caption">Laço Bulls</div>
                                    </a>
                                </div> -->
                                <div class="col-sm-6 col-lg-4 col-xxl-3">
                                    <a href="https://seletagestao.com.br" target="_blank">
                                        <img loading="lazy" src="assets/portfolio/seleta.webp?version=<?= $version ?>">
                                        <div class="caption">Seleta Gestão</div>
                                    </a>
                                </div>
                                <div class="col-sm-6 col-lg-4 col-xxl-3">
                                    <a href="https://eugabrielsilva.tk/colorama" target="_blank">
                                        <img loading="lazy" src="assets/portfolio/colorama.webp?version=<?= $version ?>">
                                        <div class="caption">Colorama</div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="text-center">
                            <a onclick="toggleCollapse()" class="ver-tudo" href="" data-bs-toggle="collapse" data-bs-target="#portfolio-completo">
                                <span class="ver">
                                    Ver tudo <i class="fas fa-chevron-down ms-2"></i>
                                </span>
                                <span class="fechar">
                                    Fechar <i class="fas fa-chevron-up ms-2"></i>
                                </span>
                            </a>
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
                        <h1>VAMOS DESENVOLVER ALGO JUNTOS?</h1>
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
                        <a href="https://wa.me/5562998358851?text=<?= $message ?>" target="_blank" class="phone">
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

        <!-- WhatsApp -->
        <section class="whatsapp-button">
            <a href="https://wa.me/5562998358851?text=<?= $message ?>" target="_blank">
                <i class="fab fa-whatsapp"></i>
            </a>
        </section>
    </div>

    <!-- JS -->
    <script async defer src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script async defer src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
    <script async defer src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
    <script async defer src="assets/js/scripts.min.js?version=<?= $version ?>"></script>
</body>

</html>