//$('#preloader').appendTo('body');

// $('.animate__animated:not(.toast)').parent().not('body').css('will-change', 'transform');


$(document).ready(function() {

    setTimeout(function() {

        $('#preloader').fadeOut('slow');
        $('body').removeClass('preloader');

    }, 1000);

});