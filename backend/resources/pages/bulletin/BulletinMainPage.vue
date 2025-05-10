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
    <CommunityMainMessage  v-if="descriptions != null" :createdAt="createdAt" :viewsCount="viewsCount" :descriptions="descriptions" :message="message"/>
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
    import Router from '../../router';
    import CommunityMainMessage from '../CommunityMainMessage.vue';
    import useFetchAxios from "../../js/composables/useFetch";

    const {
        axiosFetchData
    } = useFetchAxios();

    const tableBulletinList = ref();
    const createdAt = ref(null);
    const descriptions = ref(null);
    const viewsCount = ref(null);
    const message = ref(null);



    const columns =[
        { data: 'rawNumberList',    title: 'Number' },
        {
            data: 'rawPagesList',
            title: 'Title',
            orderable: false,
            searchable: false,
            createdCell(cell) {
                let btnAnnoucementPageLink = cell.querySelector("#btnAnnoucementPageLink")

                if((btnAnnoucementPageLink !== null)){
                    btnAnnoucementPageLink.addEventListener('click', function(event){
                        event.preventDefault();
                        let announcementApiLink = this.getAttribute("api-link");
                        getPagesById(announcementApiLink)
                    });
                }
            },
        },
        { data: 'author',       title: 'Author' },
        { data: 'rawIsRelease',   title: 'Release' },
        { data: 'status',       title: 'Situation' },
        { data: 'registered_date',       title: 'Registration Date'  },
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
            let pages  = response.data.pages_table[0];
            descriptions.value = pages.description;
            viewsCount.value = pages.views_count;
            createdAt.value = pages.registered_date;
            message.value = pages.message;
            tableBulletinList.value.dt.draw();
        });
    }

</script>
