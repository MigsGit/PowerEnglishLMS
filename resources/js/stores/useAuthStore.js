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
                router.push({name: 'AdminDashboard'});
            })
            .catch((err)=>{
                console.log(err);
            });
        },
        async logout(){
            await axios.get('/logout').then((res)=> {
                console.log('useAuthStore: logout');
                this.$reset();
                router.push({name: 'Login'});
                // location.reload();
            })
            .catch((err)=>{
                console.log(err);
            });
        },
        resetStore() {
            console.log("useAuthStore: resetStore");
            this.$reset();
        },
    },
    persist: true,
});
