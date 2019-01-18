function activatedInput(){
    var element = $(this).parent();
    if(element.hasClass('error'))
        element.removeClass('error');
    return element.addClass('activated');
}
// Ativa o efeito do input, e também verifica se esta com erro(vermelho), caso tiver ele tira.

function desactivatedInput(){
    return $(this).parent().removeClass('activated');
}
// Desativa o efeito do input pois o usuário tirou o foco dele.

function fillInput(){
    if( $(this).val() !== "")
        return $(this).parent().addClass('fill');
    return $(this).parent().removeClass('fill');
}
// Caso o usuário estiver escrito, o efeito do input permanecerá

function errorInput(){
    if( arguments.length == 1 )
        return $(arguments)[0].parent().addClass('error');
    return $(arguments).each(function(i, e){
        $(e).parent().addClass('error');
    });
// Efeito do erro, que deixa vermelho ao invés de rosa.

}
function fillDates(estado, cidade, bairro, rua){
    bairro === "" ? bairro = "Não especificado" : bairro;
    rua === "" ? rua = "Não especificado" : rua;

    $('[data-js="data-CEP"]').fadeIn('slow').addClass('fill');
    $('#uf').val(estado);
    $('#cidade').val(cidade);
    $('#bairro').val(bairro);
    $('#rua').val(rua);
    footerBottom();
    activatedButton.call(this);
}
// Insere nos inputs das informações que foi resgatado através do CEP(via ajax)

function dataCEP(){
    var inputCEP = $('#CEP');
    const regex = new RegExp('^\\d{5}-\\d{3}$');
    if(regex.test(inputCEP.val())){
        var cep = inputCEP.val().split('-').join('');
        return $.getJSON('https://viacep.com.br/ws/'+ cep +'/json/', function(data){
            if(data.erro == true){
                errorInput(inputCEP);
                alerta('#f-section', 'CEP não encontrado, digite novamente');
                return false;
            }
            fillDates.call(inputCEP, data.uf, data.localidade, data.bairro, data.logradouro)
            return true;
        })
    }else{
        errorInput(inputCEP);
        alerta('#f-section', 'CEP invalido, digite novamente'); 
        return false;
    }
}
// Serviu para pegar os dados do CEP que foi feito via Ajax, primeiro teve um filtro para deixar apenas os números ( a mascara adicionava um hifem "-")

function isValue(){
    var bool = true;
    $('.form-input').each( (i,e) => {
        if ($(e).val().length == 0)
            bool = false;
    });
    return bool;
}
// verifica se tem valores no inputs.

function activatedButton(){
    var buttonRegister = $(this).parents('section').find('.register-btn');
    if (isValue() && $('#cbx').is(':checked'))
        return buttonRegister.attr("disabled", false);
    return buttonRegister.attr("disabled", true); 
}
// Ativa o botão se tiver todos campos preenchido

function confirmPass(){
    if($('#password').val() == $('#confirm').val())
        return true;
    errorInput($('#password'), $('#confirm'));
    alerta('#f-section', 'As senhas não se coincidem');
    return false;
}
function submitSession(e){
    if(confirmPass.call(this) && dataCEP()){ 

        return true;
    }
    return e.preventDefault();
}
// Envia o formulário, se todos dados estiverem corretos, os dados irão ser enviados.

function addColor(element, number , way){
    var column = $(element).parents('.form-group').find(way).length/4;
    for(var i = 0; i < column; i++){
        $(element).parents('.form-group').find(way)[number].classList.add('active-text');
        number += 4;
    }
}
// Adiciona cor rosa no texto de escolher a box.

function choosenBallon() {
    var boxes = {
        'Beauty box': 1,
        'Powerful box': 2,
        'Beautiful box': 3,
        'Profissional': 4
    };
    $('.ballon').removeClass('active-ballon');
    $(this).addClass('active-ballon');
    $('#box').val(boxes[$('.active-ballon').text().trim()]);
    var number = $(this).prevAll().length;
    $('.form-group').find('.promo-group > .promo-text').removeClass('active-text');
    addColor(this, number, '.promo-group > .promo-text');
    activatedButton.call(this);
}
// serve para focar a box escolhida, e também enviar o dado para o input hidden.

$(document).ready(function(){
    $('.form-input').on('focus', activatedInput );
    $('.form-input').on('blur', desactivatedInput );
    $('.form-input').on('keyup', fillInput);
    $('.form-input').on('keyup', activatedButton);
    $('#cbx').on('click', activatedButton);
    $('#CEP').on('change', dataCEP);
    $('.form-input').on('change', fillInput);
    $('.ballon').on('click', choosenBallon);
    $('.register-btn').on('click', submitSession);

    $('#CEP').mask("00000-000");
    $('#cpf').mask("000.000.000-00");
    $('#nasc').mask("00/00/0000");
    $('#numcartao').mask("0000 0000 0000 0000");
    $('#dataexp').mask('00/0000');
    $('#codseg').mask('000');
    $('#tele').mask('(00) 0000-0000');
});
