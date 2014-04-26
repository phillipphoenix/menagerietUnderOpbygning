/**
* Created by Phillip on 22-04-2014.
*/
/// <reference path="jquery.d.ts" />/// <reference path="jquery.d.ts" />
$(window).ready(function () {
    $('.onload').each(function (index) {
        $(this).css({ "-webkit-animation-delay": (index / 2) + "s", "-mz-animation-delay": (index / 2) + "s", "animation-delay": (index / 2) + "s" });
        $(this).addClass("animated fadeInDown");
    });
    /*$('.onload-fade-in').each(function(index) {
    //$(this).delay(400*index).fadeIn(500);
    $(this).stop(true, true).delay(700*index).fadeIn({ duration: 700, queue: false }).css('display', 'none').slideDown(500);
    });*/
});

$('a.reload').click(function () {
    window.location.reload();
});
//# sourceMappingURL=app.js.map
