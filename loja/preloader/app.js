//$('#preloader').appendTo('body');

// $('.animate__animated:not(.toast)').parent().not('body').css('will-change', 'transform');


$(document).ready(function() {

    setTimeout(function() {

        $('#preloader').fadeOut('slow');
        $('body').removeClass('preloader');

    }, 1000);

});


$('body').on('click', 'a[href]', function(e) {

    e.preventDefault();
    var target = $(this);
    var href = target.attr('href');

    if (target.attr('href') != '#' && target.attr('href') != '#page-top' && !target.attr('href').includes('upload') && !target.attr('href').includes('webmail') && !target.attr('href').includes('tel:') && !target.attr('href').includes('api.whatsapp') && !target.data('bs-toggle') && target.attr('target') != '_blank' && !target.hasClass('fileinput-upload')) {

        $('body').addClass('preloader');


        $('.dropdown-menu.show:visible').slideUp();


        $('body .animate__slideInUp:visible').toggleClass('animate__slideInUp animate__slideOutDown');

        $('body .animate__slideInDown:visible').toggleClass('animate__slideInDown animate__slideOutUp');

        $('body .animate__zoomIn:visible').toggleClass('animate__zoomIn animate__zoomOut');

        $('body .animate__fadeIn:visible').toggleClass('animate__fadeIn animate__fadeOut');

        // $('.navbar, header.bg-gradient-ab').toggleClass('animate__slideInDown animate__slideOutUp');

        $('#preloader').fadeIn('slow', function() {

             //window.location.href = href

				$(location).attr('href', href);


        });

    } else if (target.attr('target') == '_blank') {

        window.open(href, '_blank');

    } else if (target.attr('href').includes('tel:')) {


         //window.location.href = href


			$(location).attr('href', href);


    }
});