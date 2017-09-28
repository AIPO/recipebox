// importing vue
import Vue from "vue";
import router from './router';
import App from './App.vue';


const app = new Vue({
    el: '#root',
    template:`<app></app>`,
    components:{App},
    router
});
