$(function(){
    if(lastTime == 0)
        return $('#message').text('Seus produtos já estão disponiveis');
        
    var YMD = lastTime.split(' ')[0].split('-');
    var HMS = lastTime.split(' ')[1].split(':');
    var data = {
        year: YMD[0],
        month: YMD[1], // 1 mês a mais para o usuário poder pegar produtos de novo.
        day: YMD[2],
        hour: HMS[0],
        minutes: HMS[1],
        seconds: HMS[2] 
    };
    var timer = setInterval(function(){
        var date = new Date(data.year, data.month, data.day, data.hour, data.minutes, data.seconds);
        var actualTime = new Date();
        debugger;
        if (date <= actualTime){
            $('#message').text('Seus produtos já estão disponiveis');
            $('[data-js="buy"]').removeClass('lock');
            clearInterval(timer);
        }
        else{
            if ($('#message').text() != 'Seus produtos já foram adquiridos')
                $('#message').text('Seus produtos já foram adquiridos');
            if(!$('[data-js="buy').hasClass('lock'))
                $('[data-js="buy"]').addClass('lock');
            var actDay = (date - actualTime) / 1000 / 60 / 60 / 24; 
            var actHour = (actDay - Math.floor(actDay)) * 24;
            var actMin = (actHour - Math.floor(actHour)) * 60;
            var actSec = (actMin - Math.floor(actMin)) * 60;;
            var day = String(Math.floor(actDay)).length == 1 ? '0' + Math.floor(actDay) : Math.floor(actDay); 
            var hour = String(Math.floor(actHour)).length == 1 ? '0' + Math.floor(actHour) : Math.floor(actHour); 
            var min = String(Math.floor(actMin)).length == 1 ? '0' + Math.floor(actMin) : Math.floor(actMin); 
            var sec = String(Math.floor(actSec)).length == 1 ? '0' + Math.floor(actSec) : Math.floor(actSec); 

            $('.limithour').text(
                day + 'Dias ' + 
                hour + ':' +
                min + ':' +
                sec
            );
        }
    }, 1000);
});


function insertDates(data){
    $('li.page-item').remove();
    $('.hist-content>.prod-content>.prod-group').remove();
    makePaginator(data);
    
    $(data.data).each(function (i, e) {
        s = makeStructure(e);
        $('.prod-content').append(s);
    });
    
}


function makePrevPaginator(data){
    if( 1 == data.current_page)
    return '<li class="page-item current-page"><</li>';
    return '<li class="page-item" onclick="loadProducts(' + (data.current_page - 1) + ')"><</li>';
    
}

function makeNextPaginator(data){
    if( data.last_page == data.current_page)
    return '<li class="page-item current-page">></li>';
    return '<li class="page-item" onclick="loadProducts(' + (data.current_page + 1) + ')">></li>';
    
}

function makeItemPaginator(index, data){
    if( index == data.current_page )
    return '<li class="page-item current-page"> ' + index  + ' </li>';
    return '<li class="page-item" onclick="loadProducts( ' + index + ')"> ' + index + '</li>';
    
}
function makeStructure(data){
    return '<div class="prod-group">' +
    '<div class="prod-image" style="background-image:url( /storage/' + data.imagem.imagem_um + ' )"></div>' + 
    '<ul class="prod-list">' +
    '<li class="prod-item">Nome: ' + data.produtos.nome_prod + '</li>' +
    '<li class="prod-item">Quantidade: ' + data.quant_prod + '</li>' +
    '<li class="prod-item">Status: ' + data.etapa + '</li>' +
    '</ul>' +
    '</div>'
}
function makePaginator(data){
    
    fp = makePrevPaginator(data);
    $('.page-list').append(fp);
    
    
    n = Math.ceil(data.total/3);
    n = n > 6 ? 6 : Math.ceil(n);
    
    if(data.current_page - n/2 <= 1 )
    inicio = 1;
    else if( data.last_page - data.current_page < n)
    inicio = data.last_page - n + 1;
    else
    inicio = data.current_page - n/2;
    
    fim = inicio + n - 1;
    for( i = inicio ; i <= fim; i++){
        p = makeItemPaginator(i, data)
        $('.page-list').append(p);
    }
    
    lp = makeNextPaginator(data);
    $('.page-list').append(lp);
}

function loadProducts(pagina){
    $.get('/perfil/json', {page: pagina}, function(data){
        if(data.data.length != 0)
            insertDates(data);
        else
            $('.prod-content').append('<span class="none-item"> Você ainda não efetuou nenhuma compra. </span>');
    });
}

function editProfile(e){
    e.preventDefault();

    function cancelProfile(e){
        e.preventDefault();

        $('[data-js="hide"], [data-js="pass"]').fadeOut('slow',function(){
            $('.edit').fadeIn();
            footerBottom();
            $('.local-input').attr('readonly', 'readonly');
            $('select.local-input').attr('disabled', 'disabled');
            $('.input-group').removeClass('active');

            $('#senha').val('********');
            $('#confirm').val('');
            $('#secreta').val('');
        });
    }
    
    function saveProfile(e){
        e.preventDefault();

        function submitAjax(dates){
            $.ajax({
                type: 'PATCH',
                url: 'api/perfil',
                data: dates,
                context: this,
                success: function (dados) {
                    if(dados.error != null )
                        return alerta($('body'), dados.error);
                    $('#name').val(dados.data.name);
                    $('#estado').val(dados.data.estado);
                    $('#cidade').val(dados.data.cidade);
                    $('#rua').val(dados.data.rua);
                    $('#assinatura').val(dados.data.box_id);
                    $('.image-signature').removeClass('box-1 box-2 box-3 box-4');
                    $('.image-signature').addClass('box-' + dados.data.box_id);
                    data.password = null;
                    cancelProfile(e);
                },
                error: function (error) {
                    console.error(error);
                },
            })
        }

        var data ={ 
            id: userData().id,
            nome: $('#name').val(),
            estado: $('#estado').val(),
            cidade: $('#cidade').val(),
            bairro: $('#bairro').val(),
            rua: $('#rua').val(),
            box_id: $('#assinatura').val(),
            secreta: $('#secret').val(),
        }
        if( data.secreta == '')
            return alerta($('body'), 'Digite a sua palavra secreta');

        if($('[data-js="pass"]').is(':visible')){
            if($('#confirm').val().length == '' && $('#senha').val().length == '' && $('#secret').val().length == '')
                return alerta($('body'),'Preencha todos os campos');
            else if( $('#confirm').val() != $('#senha').val() )
                return alerta($('body'), 'As senhas não se coincidem');
            else{
                data.password = $('#senha').val();
                return submitAjax(data);
            }             
        }
        return submitAjax(data);
    }

    function editPassword(){
        $(this).val("");
        $('[data-js="pass"]').fadeIn('slow',function(){
            footerBottom();
        });

    }
    
    $(this).fadeOut('slow',function(){
        $('.local-input').attr('readonly', false);
        $('select.local-input').attr('disabled', false);
        $('.input-group').addClass('active');
        $('[data-js="hide"]').fadeIn()
        footerBottom();
    })
    
    $('.cancel').on('click', cancelProfile);
    $('.save').on('click', saveProfile);
    $('#senha').on('click', editPassword);
}


function deleteScreen(e){
    e.preventDefault();
    function cancelDelete(){
        $('.delete-screen').fadeOut('slow', function(){
            $('#delete').val(''); 
            $('body').css('overflow', 'auto');
            confirmDelete.call($('#delete'));
        });
    }
    function confirmDelete(){
        if($(this).val().toLowerCase() == 'confirmar')
            return $('.delete').addClass('delete-ok');
        $('.delete').removeClass('delete-ok');
    }

    $('body').css('overflow', 'hidden');
    $('.delete-screen').fadeIn('slow');

    $('.close').on('click', cancelDelete);
    $('#delete').on('keyup', confirmDelete);
}
$(document).ready(function(){
    $(function(){
        loadProducts(1);
    })   
    $('.edit').on('click', editProfile);
    $('.exc').on('click', deleteScreen);

});