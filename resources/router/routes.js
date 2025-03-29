
import  MainPage from '../pages/MainPage.vue';
import  AnnouncementMainPage from '../pages/AnnouncementMainPage.vue';
import  Login from '../pages/Login.vue';
import  AdminPanel from '../pages/AdminPanel.vue';
import  AdminDashboard from '../pages/AdminDashboard.vue';

console.log('routes');

export default [
    {
        path: '/',
        name: 'MainPage',
        component: MainPage,
        children: [
            {
                path: 'notice',
                name: 'AnnouncementMainPage',
                component: AnnouncementMainPage,
            },
            {
                path: 'login',
                name: 'Login',
                component: Login,
            },
        ]
    },
    
    {
        path: '/me/',
        name: 'AdminPanel',
        component: AdminPanel,
        children: [
            {
                path: 'dashboard',
                name: 'AdminDashboard',
                component: AdminDashboard,
            },
        ]
    },
];
