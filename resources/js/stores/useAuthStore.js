import { defineStore } from "pinia";
import router from "../../router";
import axios from "axios";
export const useAuthStore = defineStore("auth", {
    state: () => ({
        email: null,
        name: null,
        access_token: null,
        errorMessages: {}, // Store validation errors
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
                this.errorMessages = {}; // Clear errors on success
            })
            .catch((err)=>{
                if (err.response && err.response.status === 422) {
                    // Capture Laravel validation errors in Pinia
                    this.errorMessages = err.response.data.errors;
                } else {
                    alert("Invalid Username or Password!");
                }
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
