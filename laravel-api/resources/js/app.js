require("./bootstrap");

import router from "./router";
/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component(
    "example-component",
    require("./components/ExampleComponent.vue").default
);
Vue.component("headercomponent", require("./components/Header.vue").default);
Vue.component("footercomponent", require("./components/Footer.vue").default);
Vue.component("create", require("./pages/Create.vue").default);
// import headercomponent from "./components/Header.vue";
// import footercomponent from "./components/Footer.vue";

const app = new Vue({
    el: "#app",
    data: {
        title: "Laravel Vue",
    },
    router,
});
