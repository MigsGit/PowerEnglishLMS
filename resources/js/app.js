import './bootstrap'
import AppTemplate from '../layouts/App.vue';
import {createApp} from 'vue'
import router from "../router";
import { pinia } from "../js/stores";

import DataTable from 'datatables.net-vue3'
import DataTablesCore from 'datatables.net-bs5'
DataTable.use(DataTablesCore)

createApp(AppTemplate)
.use(pinia)
.use(router)
.component('DataTable',DataTable)
.mount('#app');
