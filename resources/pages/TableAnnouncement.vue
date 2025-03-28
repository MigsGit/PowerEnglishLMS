<template>

  <!-- Notices Table -->
    <div class="container notice-list overflow-auto">
        <DataTable
            :columns="columns"
            class="table table-striped table-responsive mt-2"
            ajax="/api/get_announcement_table"
            :options="{
                serverSide: true, //Serverside true will load the network
                columnDefs:[
                    // {orderable:false,target:[0]}
                ]
            }"
            ref="tableProcedureList"
        />
    </div>
</template>

<script setup>
    import {ref, reactive, onMounted, watch, nextTick} from 'vue';
    import Router from '../router';
    import AnnouncementZoomInstallation from './AnnouncementZoomInstallation.vue';
    
    const tableProcedureList = ref()

    const columns =[
        { data: 'rawNumberList',    title: 'Number' },
        //{ data: 'rawAnnouncementList',  title: 'Title' },
        
        {
            data: 'rawAnnouncementList',
            title: 'Title',
            orderable: false,
            searchable: false,
            createdCell(cell) {
                let btnAnnoucementPageLink = cell.querySelector("#btnAnnoucementPageLink")
                
               
                if((btnAnnoucementPageLink !== null)){
                    btnAnnoucementPageLink.addEventListener('click', function(event){
                        event.preventDefault();
                       
                        let announcementPageLink = this.getAttribute("announcement-page-link");
                        getPagesById(announcementPageLink);
                        return;
                    });
                }
            },
        },
        /**/
        { data: 'created_at',       title: 'Registration Date'  },
        { data: 'views_count',       title: 'Views'  },
    ];

    Router.push({
        name: 'AnnouncementMainPage'
    })
    const getPagesById = async (id) => {
        
        console.log('getPagesById');
        return;
       let params = {

        }
        await axios.get('/api/get_pages_by_id',params)
        .then((res) => {
            console.log('dadasd');
        }).catch((err) => {
            console.log('error');
        });
    }
    
    onMounted(() => {
        

        /*
            axios.get('api/get_announcement_table')
            .then((res) => {
                console.log('dadasd');
            }).catch((err) => {

            });
        */
    })
</script>