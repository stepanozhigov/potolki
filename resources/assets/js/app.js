
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

//require('./bootstrap');
window.$ = window.jQuery = require('jquery');

window.Vue = require('vue');

require('./components/popup');
//require('./components/social');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('window-calc', require('./components/WindowCalc.vue'));
Vue.component('balcony-calc', require('./components/BalkonyCalc.vue'));
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


$(document).on('scroll', function () {
    var scrollPosition = $(window).scrollTop(),
        $header = $('.header_hidden').length > 0 ? $('.header_hidden'): $('.header_sticky');

    if (scrollPosition > 200) {
        $header.addClass('header_sticky').removeClass('header_hidden');
    }
    else {
        $header.removeClass('header_sticky').addClass('header_hidden');
    }
});

const articles = $('#articles');

if (articles.length > 0) {
    new Vue({
        el: '#articles'
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



$('.js-toggle-menu').on('click', function (e) {
    $('.header__menu').toggleClass('menu_active');
    $('body').toggleClass('no-scroll');
    $('.header__hamburger').toggleClass('active');
    $('.header__close').toggleClass('active');
});

$('.js-toggle-submenu').on('click', function (e) {
    $(this).toggleClass('menu__item_opened');
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
        $(this).next('.menu__dropdown').toggleClass('menu__dropdown_toggled');
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
                    coords[0],
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
            controls: []
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
    $(this).siblings().removeClass('active');
    $(this).addClass('active');
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
    if ($(window).width() <= 768) {
        $('.promos__item').off();
        $('.promos').on('click', '.promos__item', function () {
            $(this).siblings().removeClass('opened');
            $(this).toggleClass('opened');
            $('html, body').animate({
                scrollTop: $(this).offset().top - 80
            }, 500);
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
