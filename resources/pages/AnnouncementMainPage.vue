<template>
    <Navbar/>
    <!-- Hero Section -->
    <div class="hero-section text-center" v-if="pageLink == null">
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
    <component :is="selectedRouteComponent" />
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
    import Router from '../router';
    import Navbar from '../layouts/Navbar.vue';
    import Footer from '../layouts/Footer.vue';
    import AnnouncementZoomInstallation from './AnnouncementZoomInstallation.vue';
    
    // Create an object map where keys are strings and values are actual objects
    const routeMapping = {
        AnnouncementZoomInstallation,
    };
    const tableAnnouncementList = ref()
    const pageLink = ref(null);
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
                        let announcementPageLink = this.getAttribute("announcement-page-link");
                        pageLink.value = routeMapping[announcementPageLink]; //Convert String to Object
                    });
                }
            },
        },
        { data: 'created_at',       title: 'Registration Date'  },
        { data: 'views_count',       title: 'Views'  },
    ];
   
    // Compute which route component to use
    const selectedRouteComponent = computed(() => {
        console.log(typeof(pageLink.value));
        return pageLink.value;
        //console.log(announcementPageLink);
        //return announcementPageLink;
    });
    
</script>