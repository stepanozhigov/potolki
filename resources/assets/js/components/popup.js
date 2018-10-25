$('.js-show').on('click', function(event) {
    event.preventDefault();
    
    var source = $(this).data('src'),
        $source = $(source),
        $overlay = $('.overlay');
    
    $('body').addClass('overflowed');

    if ($source.height() % 2 == 1 ) { 
        $source.height($source.height() + 1); 
    }

    $overlay.addClass('overlay_active');
    $(source).addClass('popup_active');
});

$('.js-close').on('click', function(event) {
    event.preventDefault();
    
    $('body').removeClass('overflowed');

    var $overlay = $('.overlay'),
        $popups = $('.popup');
    
    $overlay.removeClass('overlay_active');
    $popups.removeClass('popup_active');
});