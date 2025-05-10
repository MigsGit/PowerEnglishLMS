import { createPinia } from "pinia";
import { createPersistedStatePlugin } from "pinia-plugin-persistedstate-2";
import { useAuthStore } from "./useAuthStore.js";

const pinia = createPinia();

let persistedStateOption = {};

pinia.use(createPersistedStatePlugin(persistedStateOption))

export {pinia,useAuthStore}