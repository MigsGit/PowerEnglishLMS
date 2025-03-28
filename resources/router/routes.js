import  AnnouncementMainPage from '../pages/AnnouncementMainPage.vue';
import  Login from '../pages/Login.vue';

console.log('routes');

export default [
    {
        path: '/',
        name: 'AnnouncementMainPage',
        component: AnnouncementMainPage,
    },
    {
        path: '/Login',
        name: 'Login',
        component: Login,
    },
];
