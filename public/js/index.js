
function errorInput(){
    if( arguments.length == 1 )
        return $(arguments)[0].parent().addClass('error');
    return $(arguments).each(function(i, e){
        $(e).parent().addClass('error');
    });
}
// Efeito do erro, que deixa vermelho ao invés de rosa.


function showUp() {
    const height = $('#plans').offset().top - (window.innerHeight/2);
    if (window.scrollY > height) {
        $('.kind-container').addClass('animate');
    }
}

$(document).ready(function () {
    
    // smooth scroll
    $("a").on('click', function (event) {
        if (this.hash !== "") {
            event.preventDefault();
            var hash = this.hash;
            $('html, body').animate({
                scrollTop: $(hash).offset().top - 85
            }, 800, function () {
                // window.location.hash = hash;
            });
        }
    });
    $(window).on('scroll', function (event) {
        if (window.scrollY > (window.innerHeight - 85)) {
            $('.up').fadeIn('slow');
        }
        else {
            $('.up').fadeOut('slow');
        }
    })

    // colocada em um callback separado pois se o usuário atualizar a página, irá fazer a estrutura condicional primeiro.
    $(document).on('scroll', showUp);
    $('.kind-container').on('click', function () {
        $(this).toggleClass('activate');
    });
    showUp();
});
