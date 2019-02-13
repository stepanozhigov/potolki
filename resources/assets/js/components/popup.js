$(document).on('click', '.js-show', function(event) {
    event.preventDefault();
    var source = $(this).data('src'),
        $this = $(this),
        $source = $(source),
        $overlay = $('#overlay');

    if ($this.is('.review'))
    {
        var offset = 0;

        offset = $(window).scrollTop() - $('.reviews__content').offset().top;
        console.log($(window).scrollTop());
        console.log($('.reviews').offset().top);
        console.log(offset);

        $source.css('top', offset + 150);
    }
    else {
        $('body').addClass('overflowed');
    }

    if ($this.data('title')) {
        $source.find('.overtitle').html($this.data('title'))
    }
    else {
        $source.find('.overtitle').html('Заказать звонок');
    }

    if ($this.data('button')) {
        $source.find('button').html($this.data('button'))
    }
    else {
        $source.find('button').html('Заказать звонок');
    }

    if ($source.height() % 2 == 1 ) {
        $source.height($source.height() + 1);
    }

    $overlay.addClass('overlay_active');
    $(source).addClass('popup_active');
});

$(document).on('click', '.js-showup', function(event) {
    event.preventDefault();
    var source = $(this).data('src'),
        $this = $(this),
        $source = $(source),
        $overlay = $('#overlay');


    if ($this.data('title')) {
        $source.find('.overtitle').html($this.data('title'))
    }
    else {
        $source.find('.overtitle').html('Заказать звонок');
    }

    if ($this.data('button')) {
        $source.find('button').html($this.data('button'))
    }
    else {
        $source.find('button').html('Заказать звонок');
    }
    $(source).addClass('popup_active popup_showup');
});

$('.js-close').on('click', function(event) {
    event.preventDefault();

    $('body').removeClass('overflowed');

    var $overlay = $('#overlay'),
        $popups = $('.popup');

    $overlay.removeClass('overlay_active');
    $popups.removeClass('popup_active');
});
