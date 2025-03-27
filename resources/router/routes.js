import  MainPage from '../pages/MainPage.vue';
// import Login from '../js/views/Login.vue'

console.log('routes');

export default [
    {
        path: '/',
        component: MainPage,
        // children: [
        //     {
        //         path: '/',
        //         name: 'login',
        //         component: Login,
        //     },
        // ]
    },
    // {
    //     path: '/unauthorized',
    //     component: Unauthorized,
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
