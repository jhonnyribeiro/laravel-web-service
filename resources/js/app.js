require('./bootstrap');

window.Vue = require('vue');

import router from './routes/routers'
import store from  './vuex/store'

//Vue.component('test-component', require('./components/TestComponent.vue'))

import TestComponent from './components/TestComponent.vue';

Vue.component('test-component', TestComponent);

const app = new Vue({
    router,
    store,
    el: '#app'
});
