import { defineStore } from "pinia";
import router from "../../router";
import axios from "axios";
export const useAuthStore = defineStore("auth", {
    state: () => ({
        email: null,
        name: null,
        access_token: null,
        error: null,
    }),
    getters: {

    },
    actions: {
        async login(credentials){
            await axios.post('/login',credentials).then((res)=>{
                console.log(res.data.userData);
                this.email = res.data.userData.email;
                this.name = res.data.userData.name;
                router.push({name: 'Dashboard'});
            })
            .catch((err)=>{
                console.log(err);
            });
        }
    },
    persist: true,
});
