window.axios = require('axios');

window.Vue = require('vue');

import VueRouter from 'vue-router';
import App from "./views/App.vue";

window.Vue.use(VueRouter);
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
import Contact from "./pages/Contact.vue";
import Posts from "./pages/Posts.vue";

const router = new VueRouter({
    mode: 'history',
    routes: [
        {
            path: '/contact-us',
            name: 'contacts',
            component: Contact
        },

        {
            path: '/posts',
            name: 'posts',
            component: Posts
        },
    ]
})


const app = new Vue({
    el: '#root',
    router,
    render: h => h(App)

});
