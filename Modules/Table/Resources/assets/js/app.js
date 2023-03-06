/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require("./bootstrap");
// import router from "./router/router";
// import store from "./store/store";

window.Vue = require("vue").default;

// Element Ui package
import ElementUI from "element-ui";
import "element-ui/lib/theme-chalk/index.css";

Vue.use(ElementUI);

import { Table, TableColumn, Tag } from "element-ui";
/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

// Vue.component('v-header', require('./components/Header.vue').default);
// Vue.component('v-sidebar', require('./components/Sidebar.vue').default);
Vue.component("App", require("./App.vue").default);
// Vue.use(Select);
Vue.use(Table);
Vue.use(TableColumn);
Vue.use(Tag);

// Axios


/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: "#app",
    // router,
    // store,
});
