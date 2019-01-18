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
// Caso o
function loginWindow(){
    if(window.innerHeight < 600 || window.innerWidth < 559)
        return $('.login-screen').removeClass('login-abs');
    return $('.login-screen').addClass('login-abs');
}

$(document).ready(function(){
    
    $(window).on('resize', loginWindow);
    $('.form-inputo').on('focus', activatedInput);
    $('.form-inputo').on('blur', desactivatedInput);
    $('.form-inputo').on('keyup', fillInput);
    loginWindow();
});