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
    <meta property="og:image" content="ogicon.png">
    <meta property="og:description" content="Gabriel Silva é um desenvolvedor web full stack com experiência em sites com foco em marketing digital e sistemas online.">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:title" content="Gabriel Silva | Web Developer">
    <meta name="twitter:description" content="Gabriel Silva é um desenvolvedor web full stack com experiência em sites com foco em marketing digital e sistemas online.">

    <!-- CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="shortcut icon" href="assets/images/favicon.png">
    <link rel="icon" href="assets/images/favicon.png">
    <link rel="apple-touch-icon" href="assets/images/favicon.png">
</head>

<body>
    <!-- Menu -->
    <section class="menu">
        <div class="list-group" id="menu">
            <a class="list-group-item" href="#home" onclick="scrollToElement(event, '#home')">HOME</a>
            <a class="list-group-item" href="#sobre" onclick="scrollToElement(event, '#sobre')">SOBRE</a>
            <a class="list-group-item" href="#portfolio" onclick="scrollToElement(event, '#portfolio')">PORTFÓLIO</a>
            <a class="list-group-item" href="#contato" onclick="scrollToElement(event, '#contato')">CONTATO</a>
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
                        <img src="assets/images/foto.png" class="foto">
                    </div>
                    <div class="col-lg-5">
                        <h1>Oi, eu sou o Gabriel!</h1>
                        <div class="texto">
                            Graduando em Análise e Desenvolvimento de Sistemas, trabalho a 5 anos com desenvolvimento full stack para web. Tenho vasta experiência em websites institucionais com foco em marketing digital, desenvolvimento de e-catálogos, sistemas online e sistemas de gerenciamento de conteúdo (CMS).
                        </div>
                        <div class="habilidades">
                            <h5>Linguagens que eu amo:</h5>
                            <div class="row">
                                <div class="col-lg-3">
                                    <i class="fas fa-check-circle"></i>PHP
                                </div>
                                <div class="col-lg-3">
                                    <i class="fas fa-check-circle"></i>HTML
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
                            <h5>Frameworks que eu trabalho:</h5>
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
                            <h5>Ferramentas que eu utilizo:</h5>
                            <div class="row">
                                <div class="col-lg-3">
                                    <i class="fas fa-check-circle"></i>GIT
                                </div>
                                <div class="col-lg-3">
                                    <i class="fas fa-check-circle"></i>SSH
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
                                    <a href="https://nuvemmoda.com.br" target="_blank">
                                        <img src="assets/portfolio/nuvem.png">
                                        <div class="caption">Nuvem Moda</div>
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
                <div class="row principal align-items-start">
                    <div class="col-lg-10 offset-lg-1">
                        <h1>CONTATO</h1>
                    </div>
                    <div class="col-lg-4 offset-lg-2 pe-lg-5">
                        <form action="">
                            <input type="text" placeholder="Nome">
                            <input type="text" placeholder="E-mail">
                            <input type="text" placeholder="Telefone">
                            <textarea placeholder="Mensagem"></textarea>
                            <button>ENVIAR</button>
                        </form>
                    </div>
                    <div class="col-lg-5 ps-lg-5">
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
                                EMAIL
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
                                <strong>@GABRIELOLIVEIRA30</strong>
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


    <!-- WhatsApp -->
    <a href="https://wa.me/5562998358851" target="_blank">
        <section class="whatsapp">
            <i class="fab fa-whatsapp"></i>
        </section>
    </a>

    <!-- JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.1/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/scripts.js"></script>
</body>

</html>