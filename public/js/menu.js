function footerBottom(){
    var footerHeight = $('#footer').hasClass('footer-abs') ? $('#footer').outerHeight() : 0;
        if ( $(this).innerHeight() > $('body').height() + footerHeight)
            return $('#footer').addClass('footer-abs');
        return $('#footer').removeClass('footer-abs');
}

$(document).ready(function(){
    $('.menu-icon').on('click', function(){
        $('.menu').toggleClass('active');
        $(this).find('div').removeClass('no-animation');
    });
    

    $(window).on('resize', footerBottom);
    setTimeout(() => {
        $(function(){
            footerBottom.call(window);
        })
    }, 1000);
});
