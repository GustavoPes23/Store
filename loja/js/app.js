$(document).on("scroll", function () {

    var pixels = $(document).scrollTop();

    var pageHeight = $(document).height() - $(window).height();
    
    var progress = 100 * pixels / pageHeight;

    progress = Math.round(progress) != 0 ? progress : 1;

    $("#js-progressbar").val(progress);

});