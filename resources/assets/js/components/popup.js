var MutationObserver = window.MutationObserver || window.WebKitMutationObserver || window.MozMutationObserver;
    var list = document.querySelector('body');
 
    var observer = new MutationObserver(function(mutations) {  
        mutations.forEach(function(mutation) {
            $('[name="icon_callback"]').css('display', 'none !important');
            console.log("123");
        });
    });

$(document).on('click', '.js-show', function(event) {
    event.preventDefault();
    var source = $(this).data('src'),
        $this = $(this),
        $source = $(source),
		$carrot = $('[name=icon_callback]'),
        $overlay = $('#overlay');

	$carrot.css('display', 'none !important');
	
    $('[name="icon_callback"]').hide();
 
    observer.observe(list, {
        childList: true
    });

    

    if (typeof BX !== 'undefined') {
        BX.SiteButton.hide();
    }

    if ($this.is('.climatCard') && $(document).width() < 768) {
        return
    }

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
    else if ($this.not('.climatDetail__fastBuy') > 0) {
        $source.find('button').html('Заказать звонок');
    }

    if ($source.height() % 2 == 1 ) {
        // $source.height($source.height() + 1);
    }

    $overlay.addClass('overlay_active');
    $(source).addClass('popup_active');
    $('.header_sticky').addClass('hidden');
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
    $('.header_sticky').addClass('hidden');



});

$(document).on('click','.js-close', function(event) {
    event.preventDefault();
    observer.disconnect();
    $('body').removeClass('overflowed');

    var $overlay = $('#overlay'),
        $popups = $('.popup');

    $overlay.removeClass('overlay_active');
    $popups.removeClass('popup_active');
    $('.header_sticky').removeClass('hidden');

    if (typeof BX !== 'undefined') {
        BX.SiteButton.show();
    }
});
