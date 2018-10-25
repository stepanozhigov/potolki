
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

//require('./bootstrap');
window.$ = window.jQuery = require('jquery');

window.Vue = require('vue');

require('./components/popup');
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('window-calc', require('./components/WindowCalc.vue'));
Vue.component('city-search', require('./components/CitySearch.vue'));

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


import typewriter from 'typewriter-effect/dist/core';

let $writtenElements = $('.js-writen');

$writtenElements.each((index, element) => {
    var $element = $(element),
        text = $element.text(),
        additionalTexts = $element.data('texts');

    new typewriter(element, {
        strings: [text].concat(additionalTexts),
        autoStart: true,
        loop: true,
        delay: 70
    });
})

