window.Vue = require('vue');

Vue.component('example', require('./components/Replies.vue'));

const app = new Vue({
    el: '#app'
});
