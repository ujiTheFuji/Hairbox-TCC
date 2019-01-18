function bannerSize(){
    if(window.innerHeight > 590 ){
        var height = window.innerHeight - Number($("#banner").offset().top);
        $("#banner").css('height', height + 'px');
    }
    else{
        $("#banner").css('height', '590px');
    }
}

$(document).ready(function(){
    $('.box-flex').addClass('box-animation');
    $(window).resize(bannerSize);
    bannerSize();
    
    // arrumar
    setTimeout(() => {
        bannerSize()
    }, 1000);
});
