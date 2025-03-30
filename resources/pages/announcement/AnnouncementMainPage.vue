<template>
    <!-- Hero Section -->
    <div class="hero-section text-center">
        <div class="container">
            <h2 class="fw-bold">Power English Notice</h2>
            <p>We provide you with essential class information, including the latest news and class cancellation schedules.</p>
            <ul class="list-unstyled text-start mx-auto" style="max-width: 500px;">
                <li>📌 Guide to website features and program updates</li>
                <li>📌 Notices on class cancellations and class-related matters</li>
                <li>📌 Information on price discounts and participation events</li>
            </ul>
        </div>
    </div>
    <component :is="selectedRouteComponent" :createdAt="createdAt" :viewsCount="viewsCount" :descriptions="descriptions"/>
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
            ref="tableAnnouncementList"
        />
    </div>
</template>

<script setup>
    import {
        defineProps,ref,onMounted,
        computed ,watch, nextTick,
        reactive
    } from 'vue';
    import Router from '../../router';
    import AnnouncementZoomInstallation from './AnnouncementZoomInstallation.vue';
    import useFetchAxios from "../../js/composables/useFetch";
    const {
        axiosFetchData
    } = useFetchAxios();

    // Create an object map where keys are strings and values are actual objects
    const routeMapping = {
        AnnouncementZoomInstallation,
    };
    const tableAnnouncementList = ref()
    const pageLink = ref(null);
    const createdAt = ref(null);
    const descriptions = ref(null);
    const viewsCount = ref(null);

    const columns =[
        { data: 'rawNumberList',    title: 'Number' },
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
                        let announcementApiLink = this.getAttribute("announcement-api-link");
                        getPagesById(announcementApiLink)
                    });
                }
            },
        },
        { data: 'registered_date',       title: 'Registration Date'  },
        { data: 'views_count',       title: 'Views'  },
    ];

    // Compute which route component to use
    const selectedRouteComponent = computed(() => {
        return pageLink.value;
    });

     // Read and Save Announcement
    const getPagesById = async (apiLink) => {
        let params = {
           'apiLink' : apiLink
        }
        axiosFetchData(params,'api/get_pages_by_id',function(response){
            let pages  = response.data.pages_table[0];
            pageLink.value = routeMapping[pages.page_link]; //Convert String to Object
            descriptions.value = pages.description;
            viewsCount.value = pages.views_count;
            createdAt.value = pages.registered_date;
            tableAnnouncementList.value.dt.draw();
        });
    }

</script>
