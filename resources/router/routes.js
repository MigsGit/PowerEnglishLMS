
import  MainPage from '../pages/MainPage.vue';
import  CommunityMainPage from '../pages/CommunityMainPage.vue';
import  AnnouncementMainPage from '../pages/announcement/AnnouncementMainPage.vue';
import  EducCenterNews from '../pages/community/EducCenterNews.vue';
import  ThankyouTeacher from '../pages/community/ThankyouTeacher.vue';
import  BulletinMainPage from '../pages/bulletin/BulletinMainPage.vue';
import  CourseReviewMainPage from '../pages/community/coursereview/CourseReviewMainPage.vue';

import  Curriculum from '../pages/curriculum/Curriculum.vue';
import  TuitionFee from '../pages/courseregistration/TuitionFee.vue';



import  LevelTestMainPage from '../pages/LevelTestMainPage.vue';
import  Search from '../pages/leveltest/Search.vue';
import  Schedule from '../pages/leveltest/LevelTest.vue';
import  Login from '../pages/Login.vue';
import  AdminPanel from '../pages/AdminPanel.vue';
import  AdminDashboard from '../pages/admin/ScheduleChangeTime.vue';

function checkIfSessionExist(to, from, next) {
    axios.get('check_session')
    .then((response) => {
        let session_user = response.data.session_user
        if(session_user != null){
            next();
        }else{
            next({
                path: '/login',
                replace: true
            });
        }
    })
    .catch((err) => {
        console.log(err)
    })
}


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
        path: '/curriculum',
        name: 'Curriculum',
        component: Curriculum,
    },
    {
        path: '/tuition-fee',
        name: 'TuitionFee',
        component: TuitionFee,
    },

    {
        path: '/login',
        name: 'Login',
        component: Login,
    },
    {
        path: '/me/',
        name: 'AdminPanel',
        beforeEnter: checkIfSessionExist,
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
