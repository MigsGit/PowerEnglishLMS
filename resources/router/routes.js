// import  MainPage from '../pages/MainPage.vue';
// import  AnnouncementZoomInstallation from '../pages/AnnouncementZoomInstallation.vue';
import  AnnouncementMainPage from '../pages/AnnouncementMainPage.vue';

// import Login from '../js/views/Login.vue'

console.log('routes');

export default [
    {
        path: '/',
        name: 'AnnouncementMainPage',
        component: AnnouncementMainPage,
        // children: [
        //     {
        //         path: '/',
        //         name: 'login',
        //         component: Login,
        //     },
        // ]
    },
    // {
    //     path: '/#/AnnouncementZoomInstallation',
    //     name: 'AnnouncementZoomInstallation',
    //     component: AnnouncementZoomInstallation,
        
    // },
    // {
    //     path: '/#/AnnouncementMainPage',
    //     name: 'AnnouncementMainPage',
    //     component: AnnouncementMainPage,
    // },
    
    // {
    //     path: '/panel_template/',
    //     component: PanelTemplate,
    //     children: [
    //         {
    //             path: 'dashboard',
    //             name: 'dashboard',
    //             component: Dashboard,
    //         },
    //         {
    //             path: 'user_master',
    //             name: 'user_master',
    //             component: UserMaster,
    //         },
    //         {
    //             path: 'ticket',
    //             name: 'ticket',
    //             component: Ticket
    //         },
    //         {
    //             path: 'TRT_Maintenance',
    //             name: 'trt_maintenance',
    //             component: TrtMaintenance
    //         },
    //         {
    //             path: 'assigned_ticket',
    //             name: 'assigned_ticket',
    //             component: AssignedTicket
    //         },
    //         {
    //             path: 'setting_procedure_list',
    //             name: 'setting_procedure_list',
    //             component: SettingProcedureList
    //         },
    //     ]
    // },
];
