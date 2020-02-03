//require('./bootstrap');
import Vue from 'vue';
import { ValidationProvider, extend } from 'vee-validate';
import {store} from './store/store';
import VueRouter from 'vue-router'
import 'vuetify/dist/vuetify.min.css'
window.axios = require('axios');
Vue.prototype.$http = window.axios;
window.Vuetify = require('vuetify');

//window.VueAxios=require('vue-axios').default;

//window.Vue = require('vue');

//Vue.use(VueAxios);
Vue.use(axios);

Vue.use(Vuetify);;
window.Vue = Vue;
Vue.use(VueRouter)
window.Vue.config.productionTip = false;

import  Dashboard from './modules/single/dashboard/Dashboard.vue';

Vue.component('dashboard-clinic-component', require('./modules/inline/dashboard/MainDashboard.vue').default);

Vue.component('appetiser-app', require('./modules/inline/dashboard/Appetiser.vue').default);

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
const app = new Vue({
    store,
    router: router,
    vuetify: new Vuetify(),
    el: '#app'
});

