$('.js-show').on('click', function(event) {
    event.preventDefault();
    
    var source = $(this).data('src'),
        $overlay = $('.overlay');
    
    $overlay.addClass('overlay_active');
    $(source).addClass('popup_active');
});

$('.js-close').on('click', function(event) {
    event.preventDefault();
    
    var $overlay = $('.overlay'),
        $popups = $('.popup');
    
    $overlay.removeClass('overlay_active');
    $popups.removeClass('popup_active');
});