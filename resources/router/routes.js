import  AnnouncementMainPage from '../pages/AnnouncementMainPage.vue';
import  Login from '../pages/Login.vue';
import  MainPage from '../pages/MainPage.vue';
import  AdminDashboard from '../pages/AdminDashboard.vue';

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
    {
        path: '/me/',
        name: 'MainPage',
        component: MainPage,
        children: [
            {
                path: 'dashboard',
                name: 'AdminDashboard',
                component: AdminDashboard,
            },
        ]
    },
];
