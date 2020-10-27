require('./bootstrap');

window.Vue = require('vue');


Vue.component('signatures', require('../js/components/Signature.vue'));
Vue.component('signature-form', require('../js/components/SignatureForm.vue'));

Vue.component('paginate', require('vuejs-paginate'));

const app = new Vue({
    el: '#app'
});