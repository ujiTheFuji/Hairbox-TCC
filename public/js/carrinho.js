
    function disableButton(numb, force = null){
        if(force == true)
            return $('.up').addClass('btn-disable');
        else if(force == false)
            return $('.up').removeClass('btn-disable');

        if ($(this).hasClass('down') && numb.text() == "1")
            return $(this).addClass('btn-disable');
        else if($(this).hasClass('up'))
            return $(this).parent().children('.down').removeClass('btn-disable');   
        return $(this).removeClass('btn-disable');
    }
    function quantidade(){
        var $total = 0;
        $('.btn-text').each(function (i, e) {
            $total += Number($(e).text());
        })
        return $total;
    }
    function checkMin(){
        var $total = quantidade();
        if($total < minimo)
            return $('[data-js="send"]').addClass('ofi');
        return $('[data-js="send"]').removeClass('ofi');
    }

    function checkLimit(){
        checkMin();
        var $total = quantidade();
        if ($total >= limite)
            return disableButton(null, true);
        return disableButton(null, false);
    }
    
    function quant(num){
        var pai = $(this).parent();
        var numb = pai.children('.btn-text').text(Number($(this).parent().children('.btn-text').text()) + num);
        $(this).parent().children('#input-quant').val(numb.text());
        disableButton.call(this, numb);
        return saveAmount.call(pai.children('.prod_id'));
    }

    function checkInput(){
        var check = false;
        $('.info').each(function (i, e) {
            if ($(e).val() == "")
                check = true;
        });
        if(check == true)
            return $('[data-js="send"]').addClass('offi');
        return $('[data-js="send"]').removeClass('offi');
    }

    function checkItem(){
        var item = $('.trbody').children().length;
        if(item == 0)
            return $('.info-edit').addClass('offi');
        return $('.info-edit').removeClass('offi');
    }

    function saveAmount(){
        var user = $('#userId').val();
        var id = $(this).val();
        var qntd = {
            'quant_prod' : Number($(this).parent().children('.btn-text').text())
        }
        $.ajax({
            type: 'PATCH',
            url: 'api/carrinhos/' + user + '/' + id,
            data: qntd,
            context: this,
            success: function () {
                checkLimit();
                $('.btn').attr('disabled', false);
            },
            error: function (error) {
                console.error(error);
            },
        })
    }
    function deleteItem(e){
        e.preventDefault();
        var pai = $(this).parents('tr');
        var user = $('#userId').val();
        var id = pai.find('.prod_id').val();
        $.ajax({
            type: 'delete',
            url: 'api/carrinhos/' + user + '/' + id,
            context: this,
            success: function () {
                pai.remove();
                checkLimit();
                checkItem();
            },
            error: function (erro) {
                console.error(erro);
            }
        });
    }

    function amountItem(e){
        e.preventDefault();
        $('.btn').attr('disabled', true);
        if( $(this).hasClass('up') )
            quant.call(this, 1);
        else
            quant.call(this,-1);
        
    }
    function buyScreen(){
        if( $(window).innerHeight() > 600 )
            return $('.product-group').css('height', ($(window).innerHeight() - 350) + 'px' );
        return $('.product-group').css('height', '600px' );
    }

    function toggleEdit(e){
        e.preventDefault();
        if( $('.info').attr('readonly') == 'readonly' ){
            $('.info').attr('readonly', false);
        $('.info').addClass('info-input-edit');
        return $('.cidade').focus();
        }
        $('.info').attr('readonly', true);
        $('.info').removeClass('info-input-edit');
        
    }
    
    $(document).ready(function(){
        
        $(window).on('resize', buyScreen);
        $('#edit').on('click', toggleEdit);
        $('.info').on('keyup', checkInput);
        $('.btn').on('click', amountItem);
        $('.del').on('click', deleteItem);
        $('.btn-text').each(function(i, el){
            disableButton.call( $('.down')[i], $(el) );
        });
        buyScreen();
        checkLimit();
        checkItem();
        checkInput();
        footerBottom();
    });
