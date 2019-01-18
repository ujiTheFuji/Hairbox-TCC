function activatedInput() {
    var element = $(this).parent();
    if (element.hasClass('error'))
        element.removeClass('error');
    return element.addClass('activated');
}
// Ativa o efeito do input, e também verifica se esta com erro(vermelho), caso tiver ele tira.

function desactivatedInput() {
    return $(this).parent().removeClass('activated');
}
// Desativa o efeito do input pois o usuário tirou o foco dele.

function fillInput() {
    if ($(this).val() !== "")
        return $(this).parent().addClass('fill');
    return $(this).parent().removeClass('fill');
}
// Caso o usuário estiver escrito, o efeito do input permanecerá

$(document).ready(function(){
    $('[data-js="login"]').on('click', function (event) {
        event.preventDefault();
        $('.left-screen').animate({ left: '0px' }, 'slow');
        $('.right-screen').animate({ right: '0px' }, 'slow', function () {
            $('#login-page').fadeIn('slow').css('display', 'flex');
        });
        $('body').addClass('stop-scrolling');
    })
    
    // leave login
    $('.left-screen, .right-screen, .close').on('click', function () {
        $('#login-page').fadeOut('slow', function () {
            $('.right-screen').animate({ right: '-1500px' }, 'slow');
            $('.left-screen').animate({ left: '-1500px' }, 'slow', function () {
                $('body').removeClass('stop-scrolling');
            });
        })
    })
    $(window).resize(screenHeight);
    function screenHeight(){
        $('[data-js="screen"]').css('height', window.innerHeight + 'px');
    }
    $('.form-inputo').on('focus', activatedInput);
    $('.form-inputo').on('blur', desactivatedInput);
    $('.form-inputo').on('keyup', fillInput);
    screenHeight();
});
