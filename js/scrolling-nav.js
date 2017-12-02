//jQuery to collapse the navbar on scroll
$(document).on("scroll", function() {
    if ($(window).scrollTop() > 0) {
        $(".navbar-fixed-top").addClass("scrolled");
    } else {
        $(".navbar-fixed-top").removeClass("scrolled");
    }
});

//jQuery for page scrolling feature - requires jQuery Easing plugin
$(function() {
    $(document).on('click', 'a.page-scroll', function(event) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top
        }, 1500, 'easeInOutExpo');
        event.preventDefault();
    });
});
