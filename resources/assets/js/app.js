import Vue from 'vue'
import VueRouter from 'vue-router'
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');



/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
/*
 * These are global components - able to use anywhere and even within each other
 */

Vue.component('header-component', require('./components/TheHeader.vue'));
Vue.component('footer-component', require('./components/TheFooter.vue'));
Vue.component('dropdown-link', require('./components/DropdownLink'));
Vue.component('homepage-jumbotron', require('./components/HomepageJumbotron'));
Vue.component('info-card', require('./components/InfoCard'));
Vue.component('full-section', require('./layoutcomponents/FullSection'));
Vue.component('half-half', require('./layoutcomponents/HalfHalf'));

const app = new Vue({
    el: '#app'
});
