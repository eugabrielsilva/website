$(window).on('activate.bs.scrollspy', function() {
    var section = $("#menu a.active").text();
    if(section == 'SOBRE' || section == 'CONTATO'){
        $('section.menu').addClass('dark');
    }else{
        $('section.menu').removeClass('dark');
    }
});

function scrollToElement(e, element){
    e.preventDefault();
    document.querySelector(element).scrollIntoView({behavior: 'smooth'});
}