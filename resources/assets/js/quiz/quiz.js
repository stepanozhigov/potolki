import Vue from 'vue';
window.Vue = Vue;

Vue.component('quiz', require('./views/Quiz.vue').default);



new Vue({
    el: '#app'
})







