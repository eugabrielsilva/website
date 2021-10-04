$(window).on('activate.bs.scrollspy', function() {
    var section = $("#menu a.active").text();
    if(section == 'SOBRE' || section == 'CONTATO') {
        $('section.menu').addClass('dark');
    } else {
        $('section.menu').removeClass('dark');
    }
});

$(document).ready(function() {
    $("section.preloader").fadeOut('slow');
});

function scrollToElement(e, element, mobile = false) {
    e.preventDefault();
    if(mobile) toggleMenu(e);
    document.querySelector(element).scrollIntoView({behavior: 'smooth'});
}

function toggleMenu(e) {
    e.preventDefault();
    $('.menu-dropdown').toggleClass('show');
    $('.btn-menu').toggleClass('hide');
    $('.btn-fechar').toggleClass('hide');
}

function enviarEmail(e) {
    e.preventDefault();
    $('#btn-enviar').prop('disabled', true);
    $('#btn-enviar').html('<i class="fas fa-spinner fa-spin me-2"></i> ENVIANDO...');

    $.post('mail.php', {
        nome: $('#form_nome').val(),
        email: $('#form_email').val(),
        telefone: $('#form_telefone').val(),
        mensagem: $('#form_mensagem').val(),
        token: $('meta[name="csrf_token"]').attr('content')
    }, function(data) {
        if(data.status) {
            $('#btn-enviar').toggleClass('sucesso');
            $('#btn-enviar').html('<i class="fas fa-check me-2"></i> Mensagem enviada!');
        } else {
            $('#btn-enviar').toggleClass('erro');
            $('#btn-enviar').html('<i class="fas fa-times me-2"></i> Erro ao enviar!');
        }
    }).fail(function() {
        $('#btn-enviar').toggleClass('erro');
        $('#btn-enviar').html('<i class="fas fa-times me-2"></i> Erro ao enviar!');
    });
}