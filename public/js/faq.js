$(function(){

    $(document).ready(function(){
        $('.content-title').on('click', function(){
            $(this).toggleClass('active');
            $(this).siblings().slideToggle('slow', function(){
                footerBottom();
            });
        })
    });
});