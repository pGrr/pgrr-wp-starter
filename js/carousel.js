$(document).ready(function() {
    $('.carousel-item').first().addClass('active');
    $('.carousel-background').css('background-size', '105%').animate({backgroundSize: '-=5%'}, 4000);
    $('#pgrr-carousel').on('slid.bs.carousel', function () {
        $('.carousel-item.active .carousel-background').animate({backgroundSize: '-=5%'}, 4000);
    });
    $('#pgrr-carousel').on('slid.bs.carousel', function () {
        $('.carousel-background').css('background-size', '105%');
    });
});