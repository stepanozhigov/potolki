
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

//require('./bootstrap');
window.$ = window.jQuery = require('jquery');

window.Vue = require('vue');
var Inputmask = require('inputmask');
var ionRangeSlider = require('ion-rangeslider/js/ion.rangeSlider.js');
var tooltipster = require('tooltipster/dist/js/tooltipster.bundle.js');
var rateYo = require('rateyo/src/jquery.rateyo.js');

$(document).ready(function () {
    var yaCounter = typeof window.yaCounter43807824 !== 'undefined' ? window.yaCounter43807824: undefined,
    gaCounter = typeof ga !== 'undefined' ? ga.getAll()[0] : undefined;
});

window.Vue2TouchEvents = require('vue2-touch-events');
Vue.use(Vue2TouchEvents);

require('./components/popup');
//require('./components/social');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('reviews', require('./components/Reviews.vue'));
Vue.component('window-calc', require('./components/WindowCalc.vue'));
Vue.component('balcony-calc', require('./components/BalkonyCalc.vue'));
Vue.component('simple-slider', require('./components/simpleSlider.vue'));
Vue.component('ceilings-calc', require('./components/ceilingsCalc.vue'));
Vue.component('climat-slider', require('./components/climatSlider.vue'));
Vue.component('catalogue-slider', require('./components/catalogue-slider.vue'));
Vue.component('city-search', require('./components/CitySearch.vue'));
Vue.component('add-comment', require('./components/AddComment.vue'));
Vue.component('add-review', require('./components/AddReview.vue'));
Vue.component('offer-slider', require('./components/OfferSlider.vue'));
Vue.component('gallery-carousel', require('./components/GalleryCarousel.vue'));
Vue.component('gallery-list', require('./components/GalleryList.vue'));
Vue.component('credit-calc', require('./components/CreditCalc.vue'));
Vue.component('dveri-calc', require('./components/DveriCalc.vue'));
Vue.component('peregorodki-calc', require('./components/Peregorodki.vue'));
Vue.component('zhalyuzi-calc', require('./components/Zhalyuzi.vue'));
Vue.component('posts', require('./components/Articles.vue'));
Vue.component('posts-list', require('./components/ArticlesList.vue'));
Vue.component('manufacturers', require('./components/ManufacturersCarousel.vue'));
Vue.component('banks', require('./components/banksCarousel.vue'));
Vue.component('menu-city-search', require('./components/MenuCitySearch.vue'));
// Vue.component('portfolio-photos', require('./components/PortfolioPhotos.vue'));



$(document).on('scroll', function () {
    var scrollPosition = $(window).scrollTop(),
        $header = $('.header_hidden').length > 0 ? $('.header_hidden'): $('.header_sticky');

    if (scrollPosition > 200) {
        $header.addClass('header_sticky').removeClass('header_hidden');
        $('.goTop').addClass('visible');
    }
    else {
        $header.removeClass('header_sticky').addClass('header_hidden');
        $('.goTop').removeClass('visible');
    }
});

const menuCities = $('.header__offices');

if (menuCities.length > 0) {
    new Vue({
        el: '.header__offices'
    })
}





const articles = $('#articles');

if (articles.length > 0) {
    new Vue({
        el: '#articles'
    })
}

const manufacturers = $('#manufacturers__list');

if (manufacturers.length > 0) {
    new Vue({
        el: '#manufacturers__list',
        template: '<manufacturers></manufacturers>'
    })
}

const banks = $('#credit__banks-list');

if (banks.length > 0) {
    new Vue({
        el: '#credit__banks-list',
        template: '<banks></banks>'
    })
}


const creditCalcContainer = $('#credit-calc');

if (creditCalcContainer.length > 0) {
    new Vue({
        el: '#credit-calc',
        template: '<credit-calc></credit-calc>'
    })
}

const portfolioCarouselContainer = $('.portfolio__carousel');

if (portfolioCarouselContainer.length > 0) {
    new Vue({
        el: '#portfolio__carousel',
        template: '<gallery-carousel :photos="photos"></gallery-carousel>',
        data: function () {
            return {
                photos: portfolioCarouselContainer.data('photos')
            }
        }
    });
}

const portfolioListContainer = $('.portfolio__list');

if (portfolioListContainer.length > 0) {
    new Vue({
        el:'#portfolio__list',
        template: '<gallery-list :photos="photos"></gallery-list>',
        data: function () {
            return {
                photos: portfolioListContainer.data('photos')
            }
        }
    })
}




const offerSliderContainer = $('#js-offer-slider');

if (offerSliderContainer.length > 0) {

    const   offers = offerSliderContainer.data('offers'),
            offerSlider = new Vue({
                el: '#js-offer-slider',
                template: `<offer-slider :offers="offers"></offer-slider>`,
                data: {
                    offers: offers
                }
            });
}

$('.js-add-comment').each(function(index, element) {
    var elementId = $(element).attr('id');

    new Vue({
        el: '#' + elementId
    })
})

if ($('#portfolio-photos').length > 0) {
    const portfolioPhotos = new Vue({
        el: '#portfolio-photos'
    });
}

if ($('#city-search').length > 0) {
    const citySearch = new Vue({
        el: '#city-search'
    });
}

if ($('#window-calc').length > 0) {
    var windowCalc = new Vue({
        el: '#window-calc'
    });
}

if ($('#balcony-calc').length > 0) {
    var BalkonyCalc = new Vue({
        el: '#balcony-calc'
    });
}

if ($('#simple-slider').length > 0) {
    var BalkonyCalc = new Vue({
        el: '#simple-slider'
    });
}

if ($('#ceilings-calc').length > 0) {
    var CeilingsCalc = new Vue({
        el: '#ceilings-calc'
    });
}

if ($('#climat-slider').length > 0) {
    var CeilingsCalc = new Vue({
        el: '#climat-slider'
    });
}

if ($('#catalogue-slider').length > 0) {
    var CeilingsCalc = new Vue({
        el: '#catalogue-slider'
    });
}

if ($('#dveri-calc').length > 0) {
    var DveriCalc = new Vue({
        el: '#dveri-calc'
    });
}

if ($('#peregorodki-calc').length > 0) {
    var PeregorodkiCalc = new Vue({
        el: '#peregorodki-calc'
    });
}

if ($('#zhalyuzi-calc').length > 0) {
    var ZhalyuziCalc = new Vue({
        el: '#zhalyuzi-calc'
    });
}

if ($('#add-review').length > 0) {
    new Vue({
        el: '#add-review'
    });
}

import typewriter from 'typewriter-effect/dist/core';

let $writtenElements = $('.js-writen');

$writtenElements.each((index, element) => {
    var $element = $(element),
        text = $element.text(),
        additionalTexts = $element.data('texts');

    if (additionalTexts) {
        text = [text].concat(additionalTexts);
    }
    console.log(text);
    new typewriter(element, {
        strings: text,
        autoStart: true,
        loop: true,
        delay: 70
    });
});

$('.survey__no').on('click', function () {
    $(this).closest('.survey').addClass('survey_opened');
});

$('.survey__yes').on('click', function () {
    $('.survey__buttons').slideUp();
    $('.survey__thankyou').slideDown();
});

const bodyScrollLock = require('body-scroll-lock');
const disableBodyScroll = bodyScrollLock.disableBodyScroll;
const enableBodyScroll = bodyScrollLock.enableBodyScroll;

// 2. Get a target element that you want to persist scrolling for (such as a modal/lightbox/flyout/nav).

if ($('.header').closest('.page__not-found').length > 0) {
    $('.header__top-content').on('click', function (e) {
        let mainPage = location.href.replace('notFound', '');
        location.href = mainPage;
    });
} else {
    $('.hamburger').on('click', function (e) {
        $('.mobileMenu').addClass('active');
        $('body').addClass('no-scroll');
        $('.header__hamburger').removeClass('active');
        $('.header__close').addClass('active');

        $('.scrollable').each((index, domElement) => {
            disableBodyScroll(domElement);
        });
    });
}



$('.header__close').on('click', function (e) {
    $('.mobileMenu').removeClass('active');
    $('body').removeClass('no-scroll');
    $('.header__hamburger').addClass('active');
    $('.header__close').removeClass('active');

    $('.scrollable').each((index, domElement) => {
        enableBodyScroll(domElement);
    });
});

$('.whyus__button').on('click', function () {
    $('.whyus__stat').slideToggle({
      start: function () {
        $(this).css({
          display: "flex"
        })
      }
    });
});



if ($(document).width() <= 1024) {
    $('.js-toggle-submenu').on('click', function (event) {
        event.preventDefault();
        //$(this).siblings('.menu__item_dropdown').find('.menu__dropdown_toggled').removeClass('menu__dropdown_toggled');
        $(this).closest('.menu').addClass('opened');
        $(this).next('.menu__dropdown').addClass('opened');
    })

    $('.menu__item-nav').on('click', function () {
        $(this).closest('.menu').removeClass('opened');
        $(this).closest('.menu__dropdown').removeClass('opened');
    })
}

var $mapContainer = $('#map'),
    $offices = $('.office');

if ($mapContainer.length > 0 && $offices.length > 0) {

    function offsetCoordinates(coords) {
        var screenWidth = $(document).width();
        console.log(coords);
        switch (true) {
            case (screenWidth < 600):
                return [
                    coords[0] + 0.002,
                    coords[1]
                ];
            case (screenWidth < 1000):
                return [
                    coords[0],
                    coords[1] - 0.005
                ];

            case (screenWidth < 1500):
                return [
                    coords[0],
                    coords[1] - 0.005
                ];

            default:
                return coords;
        }
    }

    function initMap ()
    {

        var map = new ymaps.Map('map', {
            center: offsetCoordinates($('.office_active').data('coords')),
            zoom: 16,
            controls: ['zoomControl']
        });

        map.behaviors.disable('scrollZoom');

        if ($(document).width() < 1024) {
            map.behaviors.disable('drag');
        }

        $offices.each(function (index, office) {

            var officePlacemark = new ymaps.Placemark(
                JSON.parse(office.dataset.coords),
                {
                    //balloonContent: 'цвет <strong>воды пляжа бонди</strong>'
                },
                {
                    iconLayout: 'default#image',
                    iconImageHref: $('#map').data('placemark'),
                    iconContent: 'asdasdasd'
                }
            );

            map.geoObjects.add(officePlacemark);
        });


        $('.js-next-office').on('click', function (e) {
            var $currentOffice = $('.office_active'),
                $nextOffice = $currentOffice.next('.office').length > 0 ? $currentOffice.next('.office') : $('.office').eq(0);

                $currentOffice.removeClass('office_active');
                $nextOffice.addClass('office_active');

                map.panTo(offsetCoordinates($nextOffice.data('coords')), {'duration': 1000});
        });

    }

    ymaps.ready(initMap)

}

$('.question__more').on('click', function(e) {

    var currentText = $(this).text(),
        dataText = $(this).data('text');

    $(this).text(dataText);

    $(this).data('text', currentText);

    $(this).prev('.question__text').toggleClass('question__text_toggled');

});

$('.calculator__type').on('click', function () {
    $(this).addClass('active').siblings().removeClass('active')
    $(this).closest('.calculator__inner').find('.calculator__main').removeClass('active').eq($(this).index()).addClass('active');
});

$('.facture').on('click', '.facture__item', function () {
    $(this)
    .addClass('active').siblings().removeClass('active')
    .closest('.facture').find('.facture__img').removeClass('active').eq($(this).index()).addClass('active');
});

$('.titles__arrow').on('click', function () {
    $(this).prev('.intro ').toggleClass('opened');
});

$('.js-link').on('click', function (e) {
    let href = $(this).attr('href');
    if (href) {
        window.open(href, '_blank');
    }
    console.log(href);
});

let onResize = function () {
    if ($(window).width() <= 1024) {
        $('.header__offices.dropdown').off();
        $('.header__directions.dropdown').off();

        $('.header__offices.dropdown').on('click', function () {
            $('.header__offices.dropdown').toggleClass('opened');
            $('.header__directions.dropdown').removeClass('opened');
        });

        $('.header__directions.dropdown').on('click', function () {
            $('.header__directions.dropdown').toggleClass('opened');
            $('.header__offices.dropdown').removeClass('opened');
        });
    }
    if ($(window).width() <= 768) {
        $('.promos').off('click', '.promos__item');
        $('.promos').on('click', '.promos__item', function () {
            $(this).siblings().removeClass('opened');
            $(this).toggleClass('opened');
            $('html, body').animate({
                scrollTop: $(this).offset().top - 80
            }, 500);
        });
        $('.article__more').off();
        $('.article__more').on('click', function () {
            $(this).prev('.article__desc').find('h3').toggleClass('opened')
        });

		$('.catalogue__list').off('click', '.catalogue__item');
		$('.catalogue__list').on('click', '.catalogue__item', function () {
			$(this).siblings().removeClass('opened');
			$(this).toggleClass('opened');
		});

        $('.ourArticle__more').off();
        $('.ourArticle__more').on('click', function () {
            $(this).closest('.ourArticle').siblings().removeClass('opened');
            $(this).closest('.ourArticle').toggleClass('opened');

            if ($(this).text() === 'Подробнее') {
                $(this).text('Свернуть');
            } else {
                $(this).text('Подробнее');
            }

        });

        $('.nav-group').off();
        $('.nav-group').on('click', function() {
        	$(this).toggleClass('nav-group_opened');
        });

        $('.calculator__type').on('click', function () {
            let list = $(this).prevAll('.calculator__type');
            let thisWidth = $(this).outerWidth();
            let width = 0;


            for (var i = 0; i < list.length; i++) {
                let element = list[i];
                let elementWidth = $(element).outerWidth();
                width += elementWidth;
            }

            let offset = thisWidth / 2 + width;
            let value = 'calc(50% - ' + offset + 'px)';
            $('.calculator__types').css("left", value);
        });
    } else {
        $('.calculator__types').css("left", 0);
    }
};

$(document).ready(onResize);
$(window).resize(onResize);



var phoneMask = new Inputmask('+7 999 999-99-99'),
    $phones = $('[type=tel]');

phoneMask.mask($phones);

$('.range').ionRangeSlider({
    skin: 'round',
    hide_min_max: true,
    extra_classes: 'range_red'
});

$('.rangeFixed').ionRangeSlider({
    skin: 'round',
    hide_min_max: true,
    hide_from_to: true,
    extra_classes: 'range_red range_fixed'
});

$('.rangeFixed').on("change", function () {
        var $inp = $(this);
        let from = $inp.data("from");   // input data-from attribute
        let to = $inp.data("to");       // input data-to attribute
        let fromSpan = $(this).closest('.climatCatalogue__filter-item').find('.climatCatalogue__range-from');
        let toSpan = $(this).closest('.climatCatalogue__filter-item').find('.climatCatalogue__range-to');
        $(fromSpan).text(from);
        $(toSpan).text(to);
});

window.onerror = function (msg, url, line, col, exception) {
    $.get('/err-handler', {
        data: {
            msg: msg,
            exception: exception,
            url: url,
            line: line,
            col: col
        }
    });
}

$('.about__all-rewards').on('click', function () {
    $('.about__rewards').toggleClass('opened');

    if ($(this).text() === 'Смотреть все награды') {
        $(this).text('Свернуть все награды');
    } else {
        $(this).text('Смотреть все награды');
    }
});

$('.about__all-images').on('click', function () {
    $('.about__images').toggleClass('opened');
    if ($(this).text() === 'Смотреть все фото') {
        $(this).text('Свернуть все фото');
    } else {
        $(this).text('Смотреть все фото');
    }
});


$('.tooltip').tooltipster({
    animation: 'fade',
    delay: 200,
    theme: ['ts-tooltip_mini'],
    distance: 16,
    side: 'bottom'
});

$('.shutterstock__arrow').on('click', function () {
	$(this).toggleClass('arrow_rotate-vertical');
	$(this).prev('.shutterstock__text ').toggleClass('opened');
});

$('.lamp__tab-caption').on('click', 'label:not(.active)', function () {
	$(this)
		.addClass('active').siblings().removeClass('active')
		.closest('.lamp').find('img.lamp__image')
		.removeClass('visible').eq($(this).index()).addClass('visible')
		.closest('.lamp').find('span.lamp__tab-text')
		.removeClass('visible').eq($(this).index()).addClass('visible');
});

$('.dillers__item-heading').on('click', function () {
    let heading = $(this);
    heading.closest('.dillers__item').siblings().removeClass('dillers__item_opened');
    heading.closest('.dillers__item').toggleClass('dillers__item_opened');
    $('html, body').animate({
        scrollTop: heading.offset().top
    }, 500);
});

$('.dillers__materials-open').on('click', function () {
    let $this = $(this),
        text = $this.text(),
        prev = $this.prev();
    $this.prev('.dillers__materials-table').toggleClass('opened');
    $this.toggleClass('arrow_rotate-vertical');

    if (text === 'Показать все изделия') {
        $this.text('Свернуть');
    } else {
        $this.text('Показать все изделия');
    }
});

$('.dillers__toPrice').on('click', function () {
    $('#price').trigger('click');
    $('html, body').animate({
        scrollTop: $('#price').offset().top
    }, 500);
});

$('.dillers__toShipping').on('click', function () {
    $('#shipping').trigger('click');
    $('html, body').animate({
        scrollTop: $('#shipping').offset().top
    }, 500);
});

$('.dillers__heading-button').on('click', function () {
    $(this).toggleClass('rotate-vertical');
    $(this).prev('p').toggleClass('opened');
});

$('.catalog-cards__item').on('click', '.catalog-cards__open', function () {
    event.preventDefault();
    $(this).closest('.catalog-cards__item').toggleClass('opened');
});


$('.form').on('submit', function (event) {
    event.preventDefault();
    var $this = $(this);

    if (typeof yaCounter !== 'undefined') {
        yaCounter.reachGoal('form-sub');
    }
    if (typeof gaCounter !== 'undefined') {
        gaCounter.send('event', 'forms', 'sub');
    }

    $.ajax({
        url: $this.attr('action'),
        data: $this.serialize(),
        method: 'POST',
        success: function () {
            $this.addClass('form_status-send');
            $this.find('button[type="submit"]').text('Заявка отправлена!').prop('disabled', true);
            $this.find('input').prop('disabled', true);
        }
    })
});

$('.phone').on('click', function () {

    if (typeof yaCounter !== 'undefined') {
        yaCounter.reachGoal('phone-click');
    }
    if (typeof gaCounter !== 'undefined') {
        gaCounter.send('event', 'click', 'phone');
    }


});

$('.whatsapp').on('click', function () {
    if (typeof yaCounter !== 'undefined') {
        yaCounter.reachGoal('whatsapp');
    }
    if (typeof gaCounter !== 'undefined') {
        gaCounter.send('event', 'whatsapp', 'click');
    }


})



$('.mobileMenu__item_category').on('click', function () {
    $('.mobileMenu__list').addClass('mobileMenu__list_category');
    $(this).addClass('active');
});

$('.mobileMenu__link-prev').on('click', function (event) {
    event.stopPropagation();
    $('.mobileMenu__list').removeClass('mobileMenu__list_category');
    $(this).closest('.mobileMenu__item_category').removeClass('active');
});

$('.climatCard__comparison').on('click', function () {
    $(this).toggleClass('active');
    if ($(this).is(".active")) {
        $(this).find('span').text('В сравнении');
    } else {
        $(this).find('span').text('К сравнению');
    }
});

$('.climatCard__favourites').on('click', function () {
    $(this).toggleClass('active');
    if ($(this).is(".active")) {
        $(this).find('span').text('В избранном');
    } else {
        $(this).find('span').text('В избранное');
    }
});

$('.conditionerPopup__comparison').on('click', function () {
    $(this).toggleClass('active');
    if ($(this).is(".active")) {
        $(this).find('span').text('В сравнении');
    } else {
        $(this).find('span').text('К сравнению');
    }
});

$('.conditionerPopup__favourites').on('click', function () {
    $(this).toggleClass('active');
    if ($(this).is(".active")) {
        $(this).find('span').text('В избранном');
    } else {
        $(this).find('span').text('В избранное');
    }
});

$('.climatCatalogue__filter-title').on('click', function () {
    $(this).parent('.climatCatalogue__filter-item').toggleClass('opened');
});

$('.climatCard__stars').rateYo({
    rating: 3,
    starWidth: '16px',
    normalFill: '#babec2',
    ratedFill: '#dc1414',
    fullStar: true,
    readOnly: true
});

$('.climatCatalogue__stars').rateYo({
    rating: $(this).attr("data-rateyo-rating"),
    starWidth: '16px',
    normalFill: '#babec2',
    ratedFill: '#dc1414',
    fullStar: true,
    readOnly: true
});

$('.conditionerPopup__stars').rateYo({
    rating: $(this).attr("data-rateyo-rating"),
    starWidth: '16px',
    normalFill: '#babec2',
    ratedFill: '#dc1414',
    fullStar: true,
    readOnly: true
});

$('.climatDetail__stars').rateYo({
    rating: $(this).attr("data-rateyo-rating"),
    starWidth: '16px',
    normalFill: '#babec2',
    ratedFill: '#dc1414',
    fullStar: true,
    readOnly: true
});

$('.headerClimat__more').on('click', function () {
    $(this).toggleClass('active');
});

$('.headerClimat__search-button').on('click', function () {
    $(this).closest('.headerClimat__search').addClass('active');
});

$('.headerClimat__back-button').on('click', function () {
    $(this).closest('.headerClimat__search').removeClass('active');
});

$('#priceSort').on('change', function () {
    if ($(this).is(":checked")) {
        $(this).next().text('возрастанию цены');
    } else {
        $(this).next().text('понижению цены');
    }
});

$('.goTop').on('click', function () {
    $("html, body").animate({ scrollTop: 0 }, "slow");
});

$('.climatCatalogue__orientation input[name=orientation]').on('change', function () {
    if($(this).val() == 'cards') {
        $('.climatCard').removeClass('climatCard_horisontal');
    } else if ($(this).val() == 'list') {
        $('.climatCard').addClass('climatCard_horisontal');
    }
});

const filter = document.querySelector(".climatCatalogue__filter-content");

$('.climatCatalogue__filter-open').on('click', function () {
    $('.climatCatalogue__filter').addClass('opened');
    disableBodyScroll(filter);
});

$('.climatCatalogue__filter-close').on('click', function () {
    $('.climatCatalogue__filter').removeClass('opened');
    enableBodyScroll(filter);
});

$('.climatCatalogue__sort-item').on('click', function () {
    $(this).addClass('active');
    $(this).siblings().removeClass('active');
});
$('.climatCatalogue__filter-clear').on('click', function (event) {
    event.stopPropagation();
});


$('.conditionerPopup__gallery-prev').on('click', function () {

    let activeSlide = $(this).closest('.conditionerPopup__gallery-list').find('.active');


    if( $(activeSlide).prev('.conditionerPopup__gallery-item').length > 0 && $(document).width() > 960) {
        $(activeSlide).removeClass('active').prev().addClass('active');

        let length = $('.conditionerPopup__gallery-item.active').prevAll(".conditionerPopup__gallery-item").length;
        length = length * 138;
        let translate = 'translateY(-' + length + 'px)';
        $(".conditionerPopup__gallery-wrap").css("transform", translate);

    } else if($(activeSlide).prev('.conditionerPopup__gallery-item').length > 0 && $(document).width() <= 960) {
        console.log(1);
        $(activeSlide).removeClass('active').prev().addClass('active');

        let length = $('.conditionerPopup__gallery-item.active').prevAll(".conditionerPopup__gallery-item").length;
        length = length * 115;
        let translate = 'translateY(-' + length + 'px)';
        $(".conditionerPopup__gallery-wrap").css("transform", translate);
    } else {
        return;
    }

});

$('.conditionerPopup__gallery-next').on('click', function () {
    let activeSlide = $(this).closest('.conditionerPopup__gallery-list').find('.active');

    if( $(activeSlide).next('.conditionerPopup__gallery-item').length > 0 && $(document).width() > 960) {
        $(activeSlide).removeClass('active').next().addClass('active');

        let length = $('.conditionerPopup__gallery-item.active').prevAll(".conditionerPopup__gallery-item").length;
        length = length * 138;
        let translate = 'translateY(-' + length + 'px)';
        $(".conditionerPopup__gallery-wrap").css("transform", translate);

    } else if($(activeSlide).next('.conditionerPopup__gallery-item').length > 0 && $(document).width() <= 960) {
        console.log(1);
        $(activeSlide).removeClass('active').next().addClass('active');
        let length = $('.conditionerPopup__gallery-item.active').prevAll(".conditionerPopup__gallery-item").length;
        length = length * 115;
        let translate = 'translateY(-' + length + 'px)';
        $(".conditionerPopup__gallery-wrap").css("transform", translate);
    } else {
        return;
    }

});

$('.climatDetail__additional-name').on('click', function() {
    $(this)
    .addClass('active').siblings().removeClass('active')
    .closest('.climatDetail__additional-content').find('.climatDetail__additional-value').removeClass('active').eq($(this).index()).addClass('active');
});

$('.share').on('click', function () {
    $(this).closest('.socials').toggleClass('opened');
});


$('.climatDetail__gallery-prev').on('click', function () {

    let activeSlide = $(this).closest('.climatDetail__gallery-list').find('.active');


    if( $(activeSlide).prev('.climatDetail__gallery-item').length > 0 && $(document).width() > 960) {
        $(activeSlide).removeClass('active').prev().addClass('active');

        let length = $('.climatDetail__gallery-item.active').prevAll(".climatDetail__gallery-item").length;
        length = length * 179;
        let translate = 'translateY(-' + length + 'px)';
        $(".climatDetail__gallery-wrap").css("transform", translate);

    } else if($(activeSlide).prev('.climatDetail__gallery-item').length > 0 && $(document).width() <= 960) {
        console.log(1);
        $(activeSlide).removeClass('active').prev().addClass('active');

        let length = $('.climatDetail__gallery-item.active').prevAll(".climatDetail__gallery-item").length;
        length = length * 70;
        let translate = 'translateY(-' + length + 'px)';
        $(".climatDetail__gallery-wrap").css("transform", translate);
    } else {
        return;
    }

});

$('.climatDetail__gallery-next').on('click', function () {
    let activeSlide = $(this).closest('.climatDetail__gallery-list').find('.active');

    if( $(activeSlide).next('.climatDetail__gallery-item').length > 0 && $(document).width() > 960) {
        $(activeSlide).removeClass('active').next().addClass('active');

        let length = $('.climatDetail__gallery-item.active').prevAll(".climatDetail__gallery-item").length;
        length = length * 179;
        let translate = 'translateY(-' + length + 'px)';
        $(".climatDetail__gallery-wrap").css("transform", translate);

    } else if($(activeSlide).next('.climatDetail__gallery-item').length > 0 && $(document).width() <= 960) {
        console.log(1);
        $(activeSlide).removeClass('active').next().addClass('active');
        let length = $('.climatDetail__gallery-item.active').prevAll(".climatDetail__gallery-item").length;
        length = length * 70;
        let translate = 'translateY(-' + length + 'px)';
        $(".climatDetail__gallery-wrap").css("transform", translate);
    } else {
        return;
    }

});
