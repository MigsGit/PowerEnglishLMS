<template>
    <!-- Hero Section -->
    <div class="hero-section text-center">
        <div class="container">
            <h2 class="fw-bold">Writing Correction Bulletin Board</h2>
            <p>We provide you with essential class information, including the latest news and class cancellation schedules.</p>
            <ul class="list-unstyled text-start mx-auto" style="max-width: 500px;">
                <li>Grab both English speaking and writing skills ! This is a free additional service provided to members</li>
                <li>taking Power English classes to write confidently in English . If you write in English</li>
                <li>on a free topic or an assignment given by an instructor will your writing by</li>
                <li>'correcting grammar errors' and 'better English expressions' .</li>
            </ul>
        </div>
    </div>
    <component :is="selectedRouteComponent" :createdAt="createdAt" :viewsCount="viewsCount" :descriptions="descriptions"/>
   <!-- Notices Table -->
    <div class="container notice-list overflow-auto">
        <DataTable
            :columns="columns"
            class="table table-striped table-responsive mt-2"
            ajax="/api/get_writing_collection_bulletin_table"
            :options="{
                serverSide: true, //Serverside true will load the network
                columnDefs:[
                    // {orderable:false,target:[0]}
                ]
            }"
            ref="tableBulletinList"
        />
    </div>
</template>

<script setup>
    import {
        defineProps,ref,onMounted,
        computed, reactive
    } from 'vue';
    import Router from '../router';
    import BulletinSample from './BulletinSample.vue';
    import useFetchAxios from "../js/composables/useFetch";

    const {
        axiosFetchData
    } = useFetchAxios();

    const pageLink = ref();

    // Create an object map where keys are strings and values are actual objects
    const routeMapping = {
        BulletinSample,
    };
    const tableBulletinList = ref();
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
        { data: 'created_at',       title: 'Registration Date'  },
        { data: 'views_count',       title: 'Views'  },
    ];

    // Compute which route component to use
    const selectedRouteComponent = computed(() => {
        return pageLink.value;
    });
    const getPagesById = async (apiLink) => {
        let params = {
           'apiLink' : apiLink
        }
        axiosFetchData(params,'api/get_bulletin_pages_by_id',function(response){
            let announcement  = response.data.announement_table[0];
            pageLink.value = routeMapping[announcement.page_link]; //Convert String to Object
            descriptions.value = announcement.description;
            viewsCount.value = announcement.views_count;
            createdAt.value = announcement.created_at;
            tableAnnouncementList.value.dt.draw();
        });
    }

</script>