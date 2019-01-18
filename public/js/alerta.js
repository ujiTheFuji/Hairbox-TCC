function closeOrWait(element){
    var contentEl = $(element).children();
    var index = contentEl.last().attr('data-alerta');
    return new Promise( (resolve) => {
        $(document).on('click', '[data-alerta="' + index + '"] .close-alert' , function(){
            resolve();
        });
        setTimeout(() => {
            resolve();
        }, 10000);
    })
    .then(
        function(){
            $('[data-alerta="' + index + '"').remove();
        }
    )
}

function verifyMessage(message) {
    elements = document.querySelectorAll('.message-alert');
    if(elements.length == 0)
        return false;
    return Array.prototype.some.call(elements, function(element) {
        return element.textContent == message;
    });
}
var alertIndex = 0;
function alerta(element, message, type = 'normal' ) {

    if(type == 'normal'){
        var alert = ($(element).find('.content-alert').length == 0);
        var contentAlert = '<div class="container-alert" data-alerta= ' + alertIndex++ + '>' +
            '<div class="close-alert"></div>' +
            '<div class="message-alert">' + message + '</div>' +
            '</div>';
    
        if (alert) {
            var contentDiv = '<div class="content-alert"></div>';
            $(element).append(contentDiv).addClass('animation-alert');
        }
        
        if (!verifyMessage(message)) {
            var elementAlert = $(element).find('.content-alert').append(contentAlert);
            closeOrWait(elementAlert);  
        }   
    }
    else if(type == 'submit'){
        var contentAlert = '<div content-submit-alert>' + 
            '<div class="submit-alert">' + 
                '<div class="gif-submit-alert></div>' +
                '<div class="message-submit-alert">' + message + '</div>' +
                '<div class="next-submit-alert">Ok !</div>' +
                '</div>' +
        '</div>';
    }
}


