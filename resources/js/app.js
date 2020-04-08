import Vue from 'vue';
require('./bootstrap');

window.Vue = require('vue');

// import dependecies tambahan
import VueRouter from 'vue-router';
import VueAxios from 'vue-axios';
import Axios from 'axios';

Vue.use(VueRouter,VueAxios,Axios);

// import file yang dibuat tadi
import App from './components/App.vue';

import Home from './components/Home.vue';
import Artist from './components/Artist.vue';
import Song from './components/Song.vue';

// membuat router
const routes = [
    {
        name: 'Home',
        path: '/',
        component: Home
    },
    {
        name: 'artist',
        path: '/artist/:id',
        component: Artist
    },
    {
        name:'song',
        path:'/song/:art_id',
        component:Song
    }
]

const router = new VueRouter({ mode: 'history', routes: routes });
new Vue(Vue.util.extend({ router }, App)).$mount("#app");