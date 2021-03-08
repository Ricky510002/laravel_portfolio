import Vue from "vue";
import Vuetify from "vuetify";

import router from './router'
// ルートコンポーネントをインポートする


import "vuetify/dist/vuetify.min.css";
window.Vue = Vue;

Vue.use(Vuetify);
//Vue.component('example-component', require('./components/ExampleComponent.vue').default);




import axios from 'axios' //追記
import VueAxios from 'vue-axios' //追記

Vue.use(VueAxios, axios) //追記

import InfiniteLoading from 'vue-infinite-loading'//追記・無限スクロール

Vue.use(InfiniteLoading)

Vue.config.productionTip = false


const app_admin = new Vue({
    el: "#app",
    vuetify: new Vuetify(),

    router, // ルーティングの定義を読み込む
    
});
















