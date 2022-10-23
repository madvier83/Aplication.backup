window.Vue = require("vue").default;

import axios from "axios";
import VueRouter from "vue-router";
Vue.use(VueRouter, axios);
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

const Home = require("../pages/Home.vue").default;
const Database = require("../pages/Database.vue").default;
const Create = require("../pages/Create.vue").default;
import NotFound from "../pages/NotFound.vue";

const routes = [
    {
        path: "/home",
        component: Home,
    },
    {
        path: "/database",
        component: Database,
    },
    {
        path: "/create",
        component: Create,
    },
    {
        path: "*",
        component: NotFound,
    },
];

const router = new VueRouter({
    routes: routes,
    mode: "history",
});

export default router;
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
