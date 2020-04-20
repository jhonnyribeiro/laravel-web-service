require('./bootstrap');

window.Vue = require('vue');

//Vue.component('test-component', require('./components/TestComponent.vue'))

import TestComponent from './components/TestComponent.vue';

Vue.component('test-component', TestComponent);

const app = new Vue({
    el: '#app'
});
