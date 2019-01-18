function toggleMenu(){
    $('.item-menu').slideToggle('slow',function(){
        footerBottom.call(window);
    });
}
function menuBar(){
    var spanBtn = $('<span class="span-menu"> Pesquisar por item </span>');
    if(window.innerWidth <= 725){
        if($('.span-menu').length == 0)
            $('.list-menu').prepend(spanBtn);
        $('.item-menu').css('display', 'none');
    }
    else{
        $('.item-menu').css('display', 'block');
        $('.span-menu').remove();
    }
}

function addStore(id, id2){
    var qntd = {
        quant_prod: 1,
        user_id: id2,
        produto_id: id,
    };
    $.ajax({
        type: 'POST',
        url: 'api/carrinhos',
        data: qntd,
        context: this,
        success: function (data) {
            alerta($('section'), data);
        },
        error: function (error) {
            console.error(error);
        },
    })
}
$(document).ready(function(){
    $('.item-title').on('click', function(){
        $(this).toggleClass('item-activated');
        $(this).next().slideToggle('slow',function(){
            footerBottom.call(window);
        });
    });

    $(window).on('resize', menuBar);
    $(document).on('click', '.span-menu', toggleMenu);

});

menuBar();