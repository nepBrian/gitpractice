import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter)

import App from './views/App'
import Hello from './views/Hello'
import Home from './views/Home'

/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

// require('./bootstrap');
const router = new VueRouter({
    mode: 'history',
    routes: [
        {
            path: '/',
            name: 'home',
            component: Home
        },
        {
            path: '/hello',
            name: 'hello',
            component: Hello,
        },
    ],
});


/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
/*
 * These are global components - able to use anywhere and even within each other
 */

Vue.component('header-component', require('./components/Header.vue'));
Vue.component('maincontent-component', require('./components/Maincontent.vue'));
Vue.component('footer-component', require('./components/TheFooter.vue'));
Vue.component('dropdown-link', {
  template: '#dropdown-link-template',
  data() {
    return {
      open: false
    }
  }
})

const app = new Vue({
    el: '#app',
    components: { App },
    router,
});
