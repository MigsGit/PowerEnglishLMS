
import  MainPage from '../pages/MainPage.vue';
import  CommunityMainPage from '../pages/CommunityMainPage.vue';
import  AnnouncementMainPage from '../pages/announcement/AnnouncementMainPage.vue';
import  EducCenterNews from '../pages/community/EducCenterNews.vue';
import  ThankyouTeacher from '../pages/community/ThankyouTeacher.vue';
import  BulletinMainPage from '../pages/bulletin/BulletinMainPage.vue';
import  CourseReviewMainPage from '../pages/community/coursereview/CourseReviewMainPage.vue';

import  LevelTestMainPage from '../pages/LevelTestMainPage.vue';
import  Search from '../pages/leveltest/Search.vue';
import  Schedule from '../pages/leveltest/LevelTest.vue';
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
            {
                path: 'lesson-review',
                name: 'CourseReviewMainPage',
                component: CourseReviewMainPage,
            },

        ]
    },
    {
        path: '/level-test',
        name: 'LevelTestMainPage',
        component: LevelTestMainPage,
        children: [
            {
                path: 'schedule',
                name: 'Schedule',
                component: Schedule,
            },
            {
                path: 'search',
                name: 'Search',
                component: Search,
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
