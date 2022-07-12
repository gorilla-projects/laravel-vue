import './bootstrap';

window.Vue = require('vue').default;

Vue.config.productionTip = false;

Vue.component('vue-products', require('./components/Products.vue').default);
Vue.component('vue-categories', require('./components/Categories.vue').default);

const app = new Vue({
    el: '#app',
});