function toggleImage(){
    var regex = new RegExp('\\/storage\\/.*.(jpg|png|jpeg)');
    var actualImage = $(this).css('background-image').match(regex)[0];
    console.log(actualImage);
    if( actualImage == image2){
        $(this).css('background-image', 'url(' + image1 + ')');
        $('#image1').css('background-image','url(' + image2 + ')');
    }
    else{
        $(this).css('background-image','url(' + image2 + ')');
        $('#image1').css('background-image','url(' + image1 + ')');
    }
        
}

$(document).ready(function(){
    $('#image1').css('background-image','url(' + image1 + ')');
    $('#image2').css('background-image','url(' + image2 + ')');

    $('#image2').on('click', toggleImage);
});