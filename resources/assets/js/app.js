require('./bootstrap');
$(document).ready(function(){
    $("a[href='#top']").click(function() {
        $("html, body").animate({ scrollTop: 0 }, "slow");
        return false;
    });

    $(document).on("scroll", onScroll);

    $('.anchor').click(function (e) {
        e.preventDefault();
        e.stopPropagation();

        $(document).off("scroll");
        $('.anchor').removeClass('active');
        $(this).addClass('active');

        var target = $(this).data('target');
        $target = $(target);


        $('html, body').stop().animate({
            'scrollTop': $target.offset().top - 120
        }, 500, 'swing', function () {
            window.location.hash = target;
            $(document).on("scroll", onScroll);
        });
    });
});

function onScroll(event) {
    var scrollTop = $(window).scrollTop();
    $('.anchor').each(function () {

        var currLink = $(this);
        var refElement = $(currLink.data('target'));
        if (currLink.data('target') !== undefined) {

            if (
                refElement.position().top <= scrollTop + 120 &&
                refElement.position().top + refElement.height() > scrollTop + 120) {
                currLink.addClass("active");
            }
            else {
                currLink.removeClass("active");
            }
        }

    });
}