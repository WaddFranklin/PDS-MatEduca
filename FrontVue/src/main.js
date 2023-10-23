import { createApp } from 'vue'
import App from './App.vue'
import Store from './components/store/store'
import Vue from 'vue';
import Vuex from 'vuex';

import { BootstrapVue, IconsPlugin } from 'bootstrap-vue'
import router from './routes'

// Import Bootstrap and BootstrapVue CSS files (order is important);

/*import 'bootstrap/dist/css/bootstrap.css'
import 'bootstrap-vue/dist/bootstrap-vue.css'*/

// Make BootstrapVue available throughout your project
/*Vue.use(BootstrapVue)

// Optionally install the BootstrapVue icon components plugin

Vue.use(IconsPlugin)*/

const app = createApp(App);

app.use(router);
app.use(Store);

app.mount('#app');
