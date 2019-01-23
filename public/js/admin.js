function insertDates(data, table, search = null) {
    $('#table-' + table + '>tfoot>tr>td>.page-item').remove();
    $('#table-' + table + '>tbody>tr').remove();
    makePaginator(data, table, search);
    
    $(data.data).each(function (i, e) {
        s = makeStructure(e, table);
        $('#table-' + table + '>tbody').append(s);
    });
    
}


function makePrevPaginator(data, table, search) {
    if (1 == data.current_page)
        return '<li class="page-item current-page"><</li>';
    if(search == null)
        return '<li class="page-item" onclick="loadProducts(' + (data.current_page - 1) + ',\'' + table + '\')"><</li>';
    return '<li class="page-item" onclick="loadProducts(' + (data.current_page - 1) + ',\'' + table + '\',\'' + search + '\')"><</li>'
    
}

function makeNextPaginator(data, table, search) {
    if (data.last_page == data.current_page)
    return '<li class="page-item current-page">></li>';
    if(search == null)
        return '<li class="page-item" onclick="loadProducts(' + (data.current_page + 1) + ',\'' + table + '\')">></li>';
    return '<li class="page-item" onclick="loadProducts(' + (data.current_page + 1) + ',\'' + table + '\',\'' + search + '\')">></li>'
    
}

function makeItemPaginator(index, data, table, search) {
    if (index == data.current_page)
        return '<li class="page-item current-page"> ' + index + ' </li>';
    if(search == null)
        return '<li class="page-item" onclick="loadProducts( ' + index + ',\'' + table + '\')"> ' + index + '</li>';
    return '<li class="page-item" onclick="loadProducts( ' + index + ',\'' + table + '\',\'' + search + '\')"> ' + index + '</li>';    
    
}
function makeStructure(data, table) {
    if(table == 'produtos'){
        return '<tr>' +
            '<td>'+ data.id +'</td>' +
            '<td>' + data.nome_prod + '</td>' +
            '<td>' + data.marca_prod + '</td>' +
            '<td>' + data.tipo_prod + '</td>' +
            '<td>' + data.quant_prod + '</td>' +
            '<td>' + data.desc_prod + '</td>' +
            '<td> <button class="btn-modal btn-edit"> / </button> </td>' +
            '<td> <button class="btn-exc btn-modal"> X </button>' +
            '<div class="tooltip-btn">' +
                '<span class="confirm"> Você tem certeza? </span>' +
                '<div class="btn-group">' +
                    '<button class="btn-modal btn-confirm">Sim</button>' +
                    '<button class="btn-modal btn-confirm">Não</button>' +
                '</div>' +
            '</div>' +
            '</td>' +
        '</tr>';
    }
    else if(table == 'correios'){
        return '<tr>' +
            '<td>' + data.id + '</td>' +
            '<td>' + data.produtos.nome_prod + '</td>' +
            '<td>' + data.quant_prod + '</td>' +
            '<td>' + data.usuarios.name + '</td>' +
            '<td>' + data.estado + '</td>' +
            '<td>' + data.cidade + '</td>' +
            '<td>' + data.bairro + '</td>' +
            '<td>' + data.rua + '</td>' +
            '<td>' + data.numero + '</td>' +
            '<td>' + data.complemento + '</td>' +
            '<td class="selected-step">' + data.etapa + '</td>' + //select depois..
        '</tr>';;
    }
    else if(table == 'usuarios'){
        return '<tr>' +
            '<td>' + data.id + '</td>' +
            '<td>' + data.name + '</td>' +
            '<td>' + data.email + '</td>' +
            '<td>' + data.estado + '</td>' +
            '<td>' + data.cidade + '</td>' +
            '<td>' + data.bairro + '</td>' +
            '<td>' + data.rua + '</td>' +
            '<td>' + data.cep + '</td>' +
            '<td>' + data.assinaturas.nome + '</td>' +
            '<td> <button class="btn-exc btn-modal"> X </button>' +
                '<div class="tooltip-btn">' +
                    '<span class="confirm"> Você tem certeza? </span>' +
                    '<div class="btn-group">' +
                        '<button class="btn-modal btn-confirm">Sim</button>' + 
                        '<button class="btn-modal btn-confirm">Não</button>' + 
                    '</div>' + 
                '</div>' +
            '</td>' +
        '</tr>';
    }
    
}
function makePaginator(data, table, search = null) {
    
    fp = makePrevPaginator(data, table, search);
    $('#table-' + table + '>tfoot>tr>td').append(fp);
    
    n = Math.ceil(data.total / 5);
    n = n > 6 ? 6 : Math.ceil(n);
    
    if (data.current_page - n / 2 <= 1)
        inicio = 1;
    else if (data.last_page - data.current_page < n)
        inicio = data.last_page - n + 1;
    else
        inicio = data.current_page - n / 2;
    
    fim = inicio + n - 1;
    for (i = inicio; i <= fim; i++) {
        p = makeItemPaginator(i, data, table, search)
        $('#table-' + table + '>tfoot>tr>td').append(p);
    }
    
    lp = makeNextPaginator(data, table, search);
    $('#table-' + table + '>tfoot>tr>td').append(lp);
}

function loadProducts(pagina, type = null, search = null) {
    if(search == null){
        $.get( '/admin/json', { page: pagina }, function (data) {
            if(type == null){
                if (data.produtos.data.length != 0)
                    insertDates(data.produtos, 'produtos');
                else
                    $('#table-produtos>tbody>tr').append('<td colspan="7"> Nenhum Produto cadastrado </td>');
        
                if(data.correios.data.length != 0)
                    insertDates(data.correios, 'correios');
                else
                    $('#table-correios>tbody>tr').append('<td colspan="11"> Nenhuma entrega cadastrada </td>');
        
                if(data.usuarios.data.length != 0)
                    insertDates(data.usuarios, 'usuarios');
                else
                    $('#table-usuarios>tbody>tr').append('<td colspan="10"> Nenhuma usúario cadastrado </td>');
            }
            else if(type == 'produtos')
                insertDates(data.produtos, type);
            else if(type == 'correios')
                insertDates(data.correios, type);
            else if(type == 'usuarios')
                insertDates(data.usuarios, type);
            else
                console.error('A tabela ' + type + ' não existe.');
        });
    }
    else if(search == 'produtos')
        submitAjax.call($('.lupe')[0], null ,pagina)
    else if(search == 'correios')
        submitAjax.call($('.lupe')[1], null ,pagina)
    else if(search == 'usuarios')
        submitAjax.call($('.lupe')[2], null ,pagina)
}


function disMissModal(){
    $('body').css('overflow', 'auto');
    $('.left-screen').animate({left: '-50%'}, 500);
    $('.right-screen').animate({right: '-50%'}, 500)
    $('.modal').fadeOut();
}
function modal()
{
    $('body').css('overflow', 'hidden');
    $('.left-screen').animate({left: '0'}, 500);
    $('.right-screen').animate({right: '0'}, 500)
    $( '#' + this.id + '-modal').fadeIn();
}

function adminWindow() {
    if (window.innerHeight < 600 || window.innerWidth < 559)
        return $('.admin-group').removeClass('admin-abs');  
    return $('.admin-group').addClass('admin-abs');
}

function submitAjax(e, pagina = 1){
    var data = {
        tabela: $(this).parents('.modal').children('.sub-title').text(),
        nome: $(this).prev().val(),
        tipo: $(this).parent().siblings().val(),
        page: pagina
    }
    var tabela = $(this).parents('.table-modal')[0].id.replace('table-', '');
    
    searchData.call($('#table-' + tabela).prev(),data, tabela);
}

function searchData(data, tabela){
    var btn = this
    function showAll(){
        loadProducts(1, tabela);
        $(this).removeClass('active-btn');
    }
    $.post('/api/admin', data, function(data){
        insertDates(data, tabela, tabela);
        $(btn).addClass('active-btn');
        $('.btn-show').on('click', showAll);
    })
}

function isValue(){
    if($(this).val() == "")
        return $(this).parent().children('.lupe').addClass('lupe-off'); 
    return $(this).parent().children('.lupe').removeClass('lupe-off'); 
}

function deleteAjax(id, tr, table){
    $.ajax({
        type: 'delete',
        url: 'api/admin/' + table + '/' + id,
        context: this,
        success: function(){
            tr.remove();
        },
        error: function(error){
            console.error(error)
        }
    })
}

function itemDelete(){
    function cancelDelete(){
        $('.tooltip-btn').removeClass('active-tooltip');
    }
    function confirmDelete(){
        var option = $(this).text();
        if(option == 'Não')
            return cancelDelete();
        var tr = $(this).parents('tr');
        var table = tr.parents('.modal')[0].id.replace('-modal', '');
        var id = tr.find('td').text()[0];
        return deleteAjax(id, tr, table);
    }
    
    if($('.active-tooltip').length >= 1 && !$(this).siblings().hasClass('active-tooltip'))
        cancelDelete();

    $(this).siblings().toggleClass('active-tooltip');
    $('.btn-confirm').on('click', confirmDelete);
}

function itemEdit(){
    var elements = $(this).parents('tr').find('td');
    var count = elements.length - 3;
    var text = [];

    if($('.edit-input').length > 0 )
        cancelEdit();
    
    function cancelEdit(){
        var datas = JSON.parse(localStorage.getItem('dados'));
        var elementos = $('.edit-input').parent();
        $('.edit-input').remove();
        $(elementos).each((i,e)=>{
            $(e).text(datas[i]);
        })
        $('.btn-off').parent().find('.btn-save').remove();
        $('.btn-off').removeClass('btn-off');
    }
    function saveEdit(){
        if($(this).text() == 'N')
            return cancelEdit();
        var input = $(this).parents('tr').find('td>.edit-input');
        var datas = {
            id: input.parents('tr').find('td')[0].textContent,
            nome: input[0].value,
            marca: input[1].value,
            tipo: input[2].value,
            qntd: input[3].value,
            desc: input[4].value
        }
        $.ajax({
            type: 'patch',
            url: 'api/admin/produto', 
            context: this,
            data: datas,
            success: function(data){
                var dados = {
                    0: data.nome_prod, 
                    1: data.marca_prod,
                    2: data.tipo_prod,
                    3: data.quant_prod, 
                    4: data.desc_prod
                } 
                localStorage.setItem('dados', JSON.stringify(dados));
                cancelEdit();
            },
            error: function(error){
                console.error(error)
            }
        })
    }
    

    for(var i = 1; i <= count; i++){
        text.push($(elements)[i].textContent);
        $(elements)[i].textContent = "";
        $('<input type="text" class="edit-input" value="' + text[ i - 1 ] + '"/>').appendTo($(elements)[i]);
    }
    
    localStorage.setItem('dados', JSON.stringify(text));
    $(elements).find('.btn-edit').addClass('btn-off');
    $(
        '<button class="btn-modal btn-save">S</button>' + 
        '<button class="btn-modal btn-save">N</button>'  
    ).appendTo($(elements)[6])

    $('.btn-save').on('click', saveEdit);
}

function addItem(){
    function cancelAddItem(){
        $('.modal-add').fadeOut('slow', function(){
            $('#produto-modal').fadeIn();
        });
    }

    function loadValue(){

        if($(this)[0].id == 'imagem_um'){
            if($(this).val() == '')
                return $('.label-form')[0].value = 'Imagem (frente)';
            return $('.label-form')[0].textContent = $(this).val().replace('C:\\fakepath\\', '');
        }
        if($(this).val() == '')
            return $('.label-form')[1].value = 'Imagem (trás)';
        return $('.label-form')[1].textContent = $(this).val().replace('C:\\fakepath\\', '');
    }

    function addAjax(){
        var dados = {
            nome: $('#nome').val(),
            tipo: $('#tipo').val(),
            marca: $('#marca').val(),
            qntd: $('#qntd').val(),
            desc: $('#desc').val(),
        }
        debugger;
        var imagem_um = $('#imagem_um').prop('files')[0];
        var imagem_dois = $('#imagem_dois').prop('files')[0];
        var data = new FormData();
        data.append('imagem_um', imagem_um);
        data.append('imagem_dois', imagem_dois);
        data.append('nome', dados.nome);
        data.append('tipo', dados.tipo);
        data.append('marca', dados.marca);
        data.append('qntd', dados.qntd);
        data.append('desc', dados.desc);

        $.ajax({
            url: '/api/admin/inserir',
            datatype: 'text',
            cache: false,
            contentType: false,
            processData: false,
            data: data,
            type: 'post',
            context: this,
            success: function(data){
                loadProducts(1);
                alerta($('body'), 'Produto adicionado com sucesso');
                cancelAddItem();
            },
            error: function(err){
                console.log(err);
            }
        })
    }

    $('#produto-modal').fadeOut('slow', function(){
        $('.modal-add').fadeIn()
    })
    $('.cancel-btn').on('click', cancelAddItem);
    $('#btn-add').on('click', addAjax);
    $('.file').on('change', loadValue);
}

function cancelStep(e = null, texto = null){
    if(texto == null)
        var text = localStorage.getItem('step')
    else
        var text = texto;

    if( this.id == 'cancelar-correio' || e == 'salvar')
        $('.btn-group-correio').fadeOut(0);

    $('.selected-step').find('.selected').parent().text(text);
    localStorage.removeItem('step');
}
function stepEdit(){
    function saveStep() {
        var datas = {
            id: idStep,
            etapa: $('.selected').val()
        };

        $.ajax({
            type: 'patch',
            url: 'api/admin/etapa',
            context: this,
            data: datas,
            success: function (data) {
                cancelStep('salvar', data);
            },
            error: function (error) {
                console.error(error)
            }
        })

    }

    if( $(this).children().length != 0)
        return;
    
    if(!$('.btn-group-correio').is(':visible'))
        $('.btn-group-correio').fadeIn('slow');

    if( $('.selected-step').children().length != 0)
        cancelStep();


    var idStep = $(this).parent().children()[0].textContent;
    var steps = ['Em verificação', 'A caminho', 'Entregue'];
    localStorage.setItem('step', this.textContent);
    var text = localStorage.getItem('step');
    var resul = steps.join().replace( text + ',', '').split(',')
    this.textContent = '';
    $(this).append(
    '<select class="selected">' + 
        '<option value="' + text + '">' + text + '</option>' +
        '<option value="' + resul[0] + '">' + resul[0] + '</option>' +
        '<option value="' + resul[1] + '">' + resul[1] + '</option>' +
    '</select>')
    
    $('#salvar-correio').on('click', saveStep);
}
function unlockBtn(){
    var bool = false;
    $('.input-add').each( (i,e) =>{
        $(e).val() == '' ? bool = true : 0;
    });
    if(bool == true)
        return $('#btn-add').addClass('btn-lock'); 
    return $('#btn-add').removeClass('btn-lock'); 
}

$(document).ready(function(){
    $('.btn').on('click', modal)
    $('.left-screen, .right-screen, .close').on('click', disMissModal);
    $('.input-form').on('keyup', isValue);
    $('.lupe').on('click', submitAjax);
    $('#add').on('click', addItem);
    $('.input-add').on('keyup change', unlockBtn );
    $('#cancelar-correio').on('click', cancelStep);
    $(document).on('click','.btn-exc', itemDelete);
    $(document).on('click', '.btn-edit' , itemEdit );
    $(document).on('click', '.selected-step', stepEdit);
    $(window).on('resize', adminWindow);
    $(function () {
        adminWindow();  
        loadProducts(1);
    }) 
});