<template>
    <Navbar/>
    <component :is="selectedRouteComponent" />
    <TableAnnouncement/>
</template>

<script setup>
    import {defineProps,ref,onMounted,computed } from 'vue'
    
    import Navbar from '../layouts/Navbar.vue';
    import Footer from '../layouts/Footer.vue';
    import TableAnnouncement from './TableAnnouncement.vue';
    
    const props = defineProps({
        selectedRouteComponent: {
            type: String,
            required: true,
        },
    });
</script>