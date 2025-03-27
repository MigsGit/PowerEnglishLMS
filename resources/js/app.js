import './bootstrap'
import AppTemplate from '../layouts/App.vue';
import {createApp} from 'vue'
import router from "../router";

console.log('app');

createApp(AppTemplate)
.use(router)
.mount('#app');
