import Vue from 'vue';
import Vuex from 'vuex';
import Vuelidate from 'vuelidate'

window.$ = window.jQuery = require('jquery');

Vue.use(Vuex)
Vue.use(Vuelidate)
window.Vue = Vue;

Vue.component('lead-page', require('./Lead.vue').default);

const leadPage = $('.lead_page');

import store from './store';

if (leadPage.length > 0) {
    new Vue({
        el: '#app',
        store
    })
}
