function errorInput() {
    if (arguments.length == 1)
        return $(arguments)[0].parent().addClass('error');
    return $(arguments).each(function (i, e) {
        $(e).parent().addClass('error');
    });
}
// Efeito do erro, que deixa vermelho ao invés de rosa.

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

function forgetWindow() {
    if (window.innerHeight < 600 || window.innerWidth < 559)
        return $('.container').removeClass('container-abs');
    return $('.container').addClass('container-abs');
}
function submitForget(e){
    e.preventDefault();
    submitAjax();
}
function dataRequest(){
    return {
        email : $('#mail').val(),
        secreta : $('#secret').val(),
        password : $('#nova').val(),
        newPassword : $('#confirmar').val()
    }
}
function submitAjax(){
    $.ajax({
        type: 'PATCH',
        url: 'api/recover',
        data: dataRequest(),
        context: this,
        success: function (data) {
            if(data.status == 'success'){
                if(data.message == '/')
                    return window.location = "/";
                return $('[data-js="req-newPass"]').fadeIn();
            }
            return alerta($('body'), data.message);
        },
        error: function (error) {
            console.error(error);
        },
    })
}
$(document).ready(function () {
    $('.form-inputo').on('focus', activatedInput);
    $('.form-inputo').on('blur', desactivatedInput);
    $('.form-inputo').on('keyup', fillInput);
    $(window).on('resize', forgetWindow);
    forgetWindow();
    $('.btn-form').on('click', submitForget);

});
