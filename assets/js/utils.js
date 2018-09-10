$(document).ready(function () {
    $('.carousel.carousel-slider').carousel({
        fullWidth: true,
        indicators: true,
    });
    $('.parallax').parallax({
        responsiveThreshold: 100,
    });
    $(".dropdown-trigger").dropdown();
    $('.sidenav').sidenav();
    $('#textarea1').val('');
    $('select').formSelect();
    M.textareaAutoResize($('#textarea1'));
    $('input#input_text, textarea#textarea2').characterCounter();
    $('#before').click(function () {
        $('.carousel.carousel-slider').carousel('prev');
    })
    $('#next').click(function () {
        $('.carousel.carousel-slider').carousel('next');
    })
    setInterval(function () {
        $('.carousel.carousel-slider').carousel('next');
    }, 4000)
});

