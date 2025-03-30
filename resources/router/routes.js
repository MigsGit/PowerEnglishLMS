
import  MainPage from '../pages/MainPage.vue';
import  CommunityMainPage from '../pages/CommunityMainPage.vue';
import  AnnouncementMainPage from '../pages/announcement/AnnouncementMainPage.vue';
import  EducCenterNews from '../pages/EducCenterNews.vue';
import  ThankyouTeacher from '../pages/ThankyouTeacher.vue';
import  BulletinMainPage from '../pages/bulletin/BulletinMainPage.vue';

import  Login from '../pages/Login.vue';
import  AdminPanel from '../pages/AdminPanel.vue';
import  AdminDashboard from '../pages/AdminDashboard.vue';



export default [
    {
        path: '/',
        name: 'MainPage',
        component: MainPage,
    },
    {
        path: '/community/',
        name: 'CommunityMainPage',
        component: CommunityMainPage,
        children: [
            {
                path: 'notice',
                name: 'AnnouncementMainPage',
                component: AnnouncementMainPage,
            },
            {
                path: 'filipino-education-center',
                name: 'EducCenterNews',
                component: EducCenterNews,
            },
            {
                path: 'teacher-present',
                name: 'ThankyouTeacher',
                component: ThankyouTeacher,
            },
            {
                path: 'english-correction',
                name: 'BulletinMainPage',
                component: BulletinMainPage,
            },

        ]
    },
    {
        path: '/login',
        name: 'Login',
        component: Login,
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
