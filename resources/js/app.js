import Vue from 'vue';

import axios from 'axios'
Vue.prototype.$http = axios;

import LoginComponent from './views/Auth/Login.vue';



const app = new Vue({
    el: '#app',
    components:{
      'login-component' : LoginComponent
    }
});