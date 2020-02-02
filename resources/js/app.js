//require('./bootstrap');
import Vue from 'vue';
import { ValidationProvider, extend } from 'vee-validate';
import {store} from './store/store';
import VueRouter from 'vue-router'
window.axios = require('axios');
Vue.prototype.$http = window.axios;
window.Vuetify = require('vuetify');

Vue.use(Vuetify);;
window.Vue = Vue;
Vue.use(VueRouter)
window.Vue.config.productionTip = false;

import  Dashboard from './modules/single/dashboard/Dashboard.vue';

Vue.component('dashboard-clinic-component', require('./modules/inline/dashboard/MainDashboard.vue').default);
Vue.component('miko-clinic-component', require('./modules/inline/dashboard/Miko.vue').default);
Vue.component('elbert-clinic-component', require('./modules/inline/dashboard/Elbert.vue').default);

const router = new VueRouter({
    routes: [
      {
        path: '/user/:userId',
        name: 'ubi-clinic-dashboard',
        component: Dashboard
      }

    ]
})

Vue.component('ValidationProvider', ValidationProvider);
var app = new Vue({
    store,
    router: router,
    vuetify: new Vuetify(),
    el: '#app'
});

